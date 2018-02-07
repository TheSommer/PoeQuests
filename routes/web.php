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

//All characters
Route::get('characters', "CharacterController@index");

//Single character
Route::get('characters/{name}', "CharacterController@show");

//all quests
Route::get('quests', "QuestController@index");

//quests within an act
Route::get('quests/act/{act}', "QuestController@act");

//single Quest
Route::get('quests/{act}/{order}', "QuestController@show");
