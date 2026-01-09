<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/user', function (Request $request){

    return $request->user();


})->middleware('auth:sanctum');*/


Route::get('/', function(){
     return view('admin.dashboard');
    // return 'Hola desde el administrador';
})->name('dashboard');

//
Route::get('/posts', function(){
    return 'Lista de posts';
})->name('posts.index');








