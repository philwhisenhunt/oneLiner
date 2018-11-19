<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Sentence;

class SentencesController extends Controller
{
    public function home(){
        // $sentences = DB::table('sentences')->get();
        // return view('layouts.order', compact('sentences'));

        $sentences = Sentence::all();
        // return $sentences;
        return view('layouts.order', compact('sentences'));

    }

    public function store(){
        //Is this right?
        // $sentences = new App\Sentence;
        // return request()->all();
        $sentence = new Sentence();
        $sentence->sentence = request('sentence');
        $sentence->user_id = 1;
        $sentence->story_id = 1;
        
        $sentence->save();
        return redirect('/giant');

    }


}
