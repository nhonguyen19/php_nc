<?php

namespace App\Http\Controllers;


use App\Models\Question;
use App\Models\Category;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

use Illuminate\Http\Request;

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
        $lsType=Category::all();
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
        Question::create([
            'category'=> $request->input('category'),
            'question'=> $request->input('question'),
            'a'=> $request->input('a'),
            'b'=> $request->input('b'),
            'c'=> $request->input('c'),
            'd'=> $request->input('d'),
            'correct_answer'=> $request->input('correct_answer'),    
            'status'=>$request->input('status'),        
            'category_id'=>1
        ]);
        return redirect()->route('questions.index');
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
        $lst=Category::all();
        return view('question_edit',['p'=>$question,'lst'=>$lst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
        //dd($request);
        $question = Question::find($id);
        $question->category = $request->category;
        $question->question = $request->question;
        $question->a = $request->a;
        $question->b = $request->b;
        $question->c = $request->c;
        $question->d = $request->d;
        $question->correct_answer = $request->correct_answer;    
        $question->status =$request->status;        
        $question->update();
        return redirect()->route('questions.index')->with('success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect()->route('questions.index');
    }
}
