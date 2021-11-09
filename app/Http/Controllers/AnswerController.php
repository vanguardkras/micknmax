<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\AnsweredUser;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function submit(Request $request)
    {
        $answeredUser = AnsweredUser::updateOrCreate(
            ['email' => $request->email],
            ['name' => $request->name]
        );

        $answeredUser->tests()->attach($request->test_id);

        foreach ($request->answers as $answer) {
            Answer::create([
                'answered_user_id' => $answeredUser->id,
                'question_id' => $answer['question_id'],
                'answer' => $answer['answer'],
            ]);
        }

        return view('success');
    }
}
