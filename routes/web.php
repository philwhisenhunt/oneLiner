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

Route::get('/', 'SentencesController@home');

// Route::get('/', function () {

 
//     $sentences = DB::table('sentences')->get();
//     return view('layouts.order', compact('sentences'));

// });

// Route::post('/', function () {

//     $sentence = new Sentence();
//     $sentence->sentence = request('sentence');

//     $sentence->save();

//     return redirect('/');
// });

Route::post('/', 'SentencesController@store');

Route::get('/giant', function() {

    $sentences = DB::table('sentences')->get();
    return view('layouts.giant', compact('sentences'));
});



// Route::get('/story', function(){
//     $sentences = DB::table('sentences')->get();
//     return view('narratives.story', compact('sentences'));
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
