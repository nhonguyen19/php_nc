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
        $lsType=Category::where('status',1)->get();
        $lst=Question::where('status',1)->get();
        return view('question_create',['lsType'=>$lsType],['lst'=>$lst]);
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
        $lst=Category::all();
        return view('question_edit',['p'=>$question,'lst'=>$lst]);
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
    public function destroy(int $id)
    {
        // $question->delete();
        // return redirect()->route('questions.index');
        
        $question= Question::find($id);
        
        $question->status = 0;
        $question->update();
        return redirect()->route('questions.index');  
    }
}