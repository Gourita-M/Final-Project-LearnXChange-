<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;
use App\Models\TeacherSkill;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
   public function index()
   {
      $skills = DB::table('users as u')
               ->join('teacher_skills as ts', 'ts.users_id','=','u.id')
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
                  )->Where('s.is_active', True)
                  ->get();
      return View('Skills', compact('skills'));
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

      return redirect('/teacher')->with('success','You Have Successsfully Added a New Skill');
   }
}
