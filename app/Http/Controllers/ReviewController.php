<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Connect_sessions;
use App\Models\User;

class ReviewController extends Controller
{
   
    public function submitReview(Request $request)
    {
        
        Review::Create([
            'rating' => $request->revieew,
            'comment' => $request->comment,
            'connect_sessions_id' => $request->connectsessionid,
            'reviewer_id' => auth::user()->id,
            'reviewee_id' => $request->teacherid,
        ]);

        $user = User::Where('id', $request->teacherid)->first();

        User::Where('id', $request->teacherid)->update([
                'xp' => $user->xp + $request->revieew * 10,
            ]);

        Connect_sessions::Where('id', $request->connectsessionid)
                        ->update([
                            'status' => 'Finished'
                        ]);
        Return Redirect('/learner')->with('Succes','You Have Finished a Session');
        
    }
    public function store(StoreReviewRequest $request)
    {
        Review::Create([
        'rating' => $request['rating'],
        'comment' => $request['comment'],
        'connect_sessions_id' => $request['connect_sessions_id'],
        'reviewer_id' => $request['reviewer_id'],
        'reviewee_id' => $request['reviewee_id'],
        ]);
    }

}
