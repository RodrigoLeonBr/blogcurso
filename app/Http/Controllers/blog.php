<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class blog extends Controller
{
    public function index(){

        $titulos = [
            0 => "Man must explore, and this is exploration at its greatest",
            1 => "I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.",
            2 => "Science has not yet mastered prophecy",
            3 => "Failure is not an option",
        ];

        $subtitulos = [
            0 => "Problems look mighty small from 150 miles up",
            1 => " ",
            2 => "We predict too much for the next year and yet far too little for the next ten.",
            3 => "Many say exploration is part of our destiny, but it’s actually our duty to future generations.",
        ];

        $autores = [
            0 => "Start Bootstrap",
            1 => "Start Bootstrap",
            2 => "Start Bootstrap",
            3 => "Start Bootstrap",
        ];

        $datas = [
            0 => " on August 24, 2014",
            1 => " on August 24, 2014",
            2 => " on August 24, 2014",
            3 => " on August 24, 2014",
        ];


        return view('index', compact('titulos','subtitulos','autores','datas'));
    }
}
