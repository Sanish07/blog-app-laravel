<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddBlog;
use App\Http\Controllers\ViewBlog;
use App\Http\Controllers\ReturnViews;

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

Route::get('/{route?}',[ReturnViews::class,'ackRequest']);

Route::post("/update",[AddBlog::class,'newBlog']);

Route::get("/blogs/{id}",[ViewBlog::class,'displayBlog']);

/*
Route::get('/',function(){
    return view('layout.master');
});

Route::get('/blogs', function () {
    return view('home');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/projects',function(){
    return view('projects');
});


Route::get('/nature',function(){
    return view('nature');
});

Route::get('/tech',function(){
    return view('tech');
});

Route::get('/sports',function(){
    return view('sports');
});

Route::get('/enter',function(){
    return view('enter');
});

Route::get('/food',function(){
    return view('food');
});

Route::view("manage","addBlog");

*/

