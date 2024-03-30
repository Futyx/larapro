<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
   public function play(){
    return view('play', ['user'=>auth()->user()]);
   }

   public function data(){

   }
}
