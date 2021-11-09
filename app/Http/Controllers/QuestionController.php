<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        Question::create($request->all());

        return back();
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());

        return back();
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return back();
    }
}
