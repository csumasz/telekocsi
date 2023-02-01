<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class csvController extends Controller
{
   public function process(){
        return view('filehanding/headers');
    }
}
