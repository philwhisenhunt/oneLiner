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

    // $sentences = DB::table('sentences')->get()->first();
    
    // $sentences = DB::all();
    // var_dump($sentences);
    // return view('layouts.index', ['sentences' => $sentences] );
    // return('hello world');
    // $sentences = ['data', 'here'];
    // return $sentences;  
    $sentences = DB::table('sentences')->get();
    return view('layouts.index', compact('sentences'));

});

Route::post('/', function () {

});
