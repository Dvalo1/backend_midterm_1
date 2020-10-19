<?php

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



Route::get("/","ProductsController@userindex");

Route::get("/show/{id}","ProductsController@usershow")->name("usershow"); // Specific movie for user

Route::get("/show/category/{id}","ProductsController@usershowByCategory")->name("usershowByCategory"); // Specific movie for user

Route::get("/admin","ProductsController@index")->name("adminindex"); // Admin panel (Show all movies)


Route::get("/admin/create","ProductsController@create")->name("admincreate"); // Admin movie creation

Route::get("/admin/genre/create","ProductsController@createGenre")->name("admincreateGenre"); // Admin genre



Route::get("/admin/show/{id}","ProductsController@show")->name("adminshow"); // Admin show specific movie


Route::get("/admin/edit/{id}","ProductsController@edit")->name("adminedit"); // Admin edit specific movie



Route::post("/admin/store","ProductsController@store")->name("adminstore"); // Admin store

Route::post("/admin/genre/store","ProductsController@storeGenre")->name("adminstoreGenre"); // Admin store genre


Route::post("/admin/update","ProductsController@update")->name("adminupdate"); // Admin update

Route::post("/admin/delete","ProductsController@delete")->name("admindelete"); // Admin delete