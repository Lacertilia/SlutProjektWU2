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

Route::get('/', function () {return view('welcome');});

Route::get('/generation1Dex', 'DexController@genOne');

Route::get('/generation2Dex', 'DexController@genTwo');

Route::get('/generation3Dex', 'DexController@genThree');

Route::get('/generation4Dex', 'DexController@genFour');

Route::get('/generation5Dex', 'DexController@genFive');

Route::get('/generation6Dex', 'DexController@genSix');

Route::get('/generation7Dex', 'DexController@genSeven');

Route::get('/generation8Dex', 'DexController@genEight');

Route::get('/generation1Dex/pokemon', 'DexController@pokemonGen1');