<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\QuestionController as AdQuestioncontroller;

use App\http\Controllers\CategoryController as AdCategoryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('/chu_des', 'App\Http\Controllers\CategoryController', ['except' => ['show']]);
	Route::resource('/questions', 'App\Http\Controllers\QuestionController', ['except' => ['show']]);
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	//Route::get('/question/create', [AdQuestioncontroller::class, 'create'])->name('Question-Create-get');
	//Route::post('/question/create', [AdQuestioncontroller::class, 'store'])->name('Question-Create-post');
	//Route::get('/question/edit', [AdQuestioncontroller::class, 'edit'])->name('Question-Edit-get');
	//Route::post('/question/edit', [AdQuestioncontroller::class, 'store'])->name('Question-Edit-post');
	//Route::put('/question/update', [AdQuestioncontroller::class, 'update'])->name('Question-Edit-put');
	//Route::delete('/question/delete',[AdQuestioncontroller::class,'destroy'])->name('Question-Delete-delete');
	//Route::get('/chu_de/create', [AdCategoryController::class, 'create'])->name('Category-Create-get');
	//Route::post('/chu_de/create', [AdCategoryController::class, 'store'])->name('Category-Create-post');

	Route::get('/question/create', [AdQuestioncontroller::class, 'create'])->name('Question-Create-get');
	Route::post('/question/create', [AdQuestioncontroller::class, 'store'])->name('Question-Create-post');

	Route::get('/question/edit', [AdQuestioncontroller::class, 'edit'])->name('Question-Edit-get');
	Route::post('/question/edit', [AdQuestioncontroller::class, 'store'])->name('Question-Edit-post');
	Route::put('/question/update', [AdQuestioncontroller::class, 'update'])->name('Question-Edit-put');
	Route::get('/chu_de/create', [AdCategoryController::class, 'create'])->name('Category-Create-get');
	Route::post('/chu_de/create', [AdCategoryController::class, 'store'])->name('Category-Create-post');


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

