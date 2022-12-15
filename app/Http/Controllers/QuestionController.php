<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Category;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lst=Question::all();
        return view('question',['lst'=>$lst]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsType=Category::get();
        return view('question_create',['lsType'=>$lsType]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        // $lst=Question::all();
        // return view('question_edit',['lst'=>$lst]);
        $lsType=Category::get();
        return view('question_edit',['p'=>$question,'lsType'=>$lsType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        // dd($request);
        $question->fill([
            'id'=>$request->id,
            'category'=> $request->category,
            'question'=>$request->question,
            'a'=>$request->a,
            'b'=>$request->b,
            'c'=>$request->c,
            'd'=>$request->d,
            'correct_answer'=>$request->correct_answer,
        ]);
        $question->save();
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
