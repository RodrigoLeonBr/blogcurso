<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class about extends Controller
{
    public function index(){
        return view('about');
    }
}
