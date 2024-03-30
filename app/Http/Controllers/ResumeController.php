<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index($email){

        $user= User::where('email', $email)->firstOrfail();
        return view('resume', ['user'=>$user]);
    }
}
