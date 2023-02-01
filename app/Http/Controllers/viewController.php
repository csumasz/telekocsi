<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
   
    public function main (){
        return view('main');
    }
    public function welcome (){
        return view('telekocsi');
    }
    public function registration (){
        return view('regisztracio');
    }
    public function bemutatkozas (){
        return view('telekocsi');
    }
    public function soforoknek (){
        return view('regisztracio');
    }
    public function utasoknak (){
        return view('regisztracio');
    }
    public function bejelentkezes (){
        return view('regisztracio');
    }
}
