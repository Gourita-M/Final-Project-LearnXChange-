<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLearningRequestRequest;
use App\Http\Requests\UpdateLearningRequestRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\LearningRequest;
use Illuminate\Http\Request;


class LearningRequestController extends Controller
{
    
    public function create(StoreLearningRequestRequest $request)
    {
        
        LearningRequest::Create([
            'description' => $request['description'],
            'goal_description' => $request['goal_description'],
            'preferred_session_type' => $request['preferred_session_type'],
            'learner_id' => auth::user()->id,
            'teacher_skills_id' => $request['skill_id'],
        ]);

        return Redirect('/skills')->with('success','Your Request is Sent Successfully');
    }

    public function declineRequest(Request $request)
    {
        
        $data = $request->validate([ 'request_id' => 'integer|required' ]);

        LearningRequest::Where('id', $data['request_id'])
                            ->Update(['status' => 'Declined']);

        return Redirect('/teacher')->with('success','You Have Declined Request ');
    }
}