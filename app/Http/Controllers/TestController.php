<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\AnsweredUser;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        return view('tests', compact('tests'));
    }

    public function show(Test $test)
    {
        $test->load('questions');

        return view('test', compact('test'));
    }

    public function store(Request $request)
    {
        Test::create($request->all());

        return back();
    }

    public function destroy(Test $test)
    {
        $test->delete();

        return back();
    }

    public function resultsIndex()
    {
        $users = AnsweredUser::with('tests')->get();

        return view('resultsIndex', compact('users'));
    }

    public function results(int $testId, int $answeredUserId)
    {
        $answers = Answer::where('answered_user_id', $answeredUserId)
            ->with('question')
            ->whereRelation('question', 'test_id', $testId)
            ->get();

        return view('results', compact('answers'));
    }

    public function publicShow(Test $test)
    {
        $test->load('questions');

        return view('testPublic', compact('test'));
    }
}
