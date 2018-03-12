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

Route::get('/', function () {
    return view('welcome');
});

//Normal Route Function With User Define Route Name
//Route::get("/", "HomeController@index")->name("MainPage");

//Route With Url Path Param
//Route::get("test/{title}/{content}", "HomeController@test");


Route::get("test", "TestingController@test");