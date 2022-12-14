<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Question;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lstQuestion= Question::all();
        $lst=Category::all();
        return view('chu_de',['lst'=>$lst,'lstQuestion'=>$lstQuestion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lst=Category::where('status',1)->get();
        return view('chu_de_create',['lst'=>$lst]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $lst=Category::find($id);
        return view('chu_de_edit',['lst'=>$lst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,int $id)
    {
       //dd($request);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->update();
        return redirect()->route('chu_des.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {   
        //dd($id);
        $category= Category::find($id);
        $category->status = 0;
        $category->update();
        return redirect()->route('chu_des.index');  
    }
}
