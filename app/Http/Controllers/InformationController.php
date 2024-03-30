<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformationRequest;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index(){
        return view('information.edit', ['user'=>auth()->user()]);
    }

    public function store(InformationRequest $request){
        $uploadurl=$request->avatar->store('public/avatars');
        $uploadurl= str_replace('public', '' , $uploadurl);

        // dd($uploadurl);

        $user=auth()->user();
        $user->bio= $request->bio;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->avatar= $uploadurl;

        $user->save();
        
        return redirect()->route('dashboard');
    }
}
