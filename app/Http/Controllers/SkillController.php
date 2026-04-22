<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;
use App\Models\TeacherSkill;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categories;

class SkillController extends Controller
{
   public function index(Request $request)
    {

        $query = DB::table('users as u')
            ->join('teacher_skills as ts', 'ts.users_id', '=', 'u.id')
            ->join('skills as s', 's.id', '=', 'ts.skills_id')
            ->join('categories as c', 'c.id', '=', 's.categories_id')
            ->select(
                'u.firstname',
                'u.lastname',
                'u.xp',
                's.*',
                'ts.level',
                'ts.years_experience as years',
                'c.category_name as category',
                'ts.id as teacherskillid',
                'u.id as teacherid'
            )
            ->where('s.is_active', true);
 
        if ($request->filled('search')) {
            $searchTerm = $request->input('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('s.name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('u.firstname', 'like', '%' . $searchTerm . '%')
                    ->orWhere('u.lastname', 'like', '%' . $searchTerm . '%')
                    ->orWhere('s.description', 'like', '%' . $searchTerm . '%');
            });
        }
 
        if ($request->filled('category')) {
            $query->where('c.category_name', $request->input('category'));
        }

        if ($request->filled('levels')) {
            $levels = $request->input('levels');
            if (is_array($levels) && !empty($levels)) {
                $query->where('ts.level', $levels);
            }
        }
 
        $query->orderByDesc('u.xp')->orderBy('s.name');
 
        $skills = $query->paginate(9)->appends($request->query());

        $totalCount = $query->count();

        $categories = Categories::get();
 
        return view('Skills', compact('categories','skills', 'totalCount'));
    }

    public function getCategories()
    {
        return DB::table('categories')
            ->select('category_name')
            ->distinct()
            ->pluck('category_name');
    }

   public function create(StoreSkillRequest $request)
   {
      $validated = $request->validated();

      $skill = Skill::create([
         'name' => $validated['name'],
         'description' => $validated['description'],
         'icon_url' => $validated['icon_url'],
         'categories_id' => $validated['categories_id'],
      ]);

      TeacherSkill::Create([
         'users_id' => Auth::user()->id,
         'skills_id' => $skill->id,
         'level' => $validated['level'],
         'years_experience' => $validated['years'],
      ]);

      return redirect('/profile')->with('success','You Have Successsfully Added a New Skill');
   }

   public function removeSkill(Request $request)
   {

      $data = $request->validate([ 'skillid' => 'integer|required']);
    

      Skill::Where('id', $data['skillid'])->delete();
      TeacherSkill::Where('skills_id', $data['skillid'])->delete();
    
      return redirect('/profile')->with('success','You Have Removed Skill');
   }
}
