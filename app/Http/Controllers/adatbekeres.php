<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adatbekeres extends Controller
{
    public function bekuld(){
        return view('welcome');
    }
    public function rogzit(Request $req){
        $req->validate(
            [
                "vez_nev" => "required|min:1|max:50",
                "ker_nev" => "required|min:1|max:50",
                "szul_ido" => "required|date"
            ],
            [
                "vez_nev.required"=>"A mezőt kötelező kitölteni!",
            "vez.nev.min"=> "Minimum 1 karakter!",
            "vez.nev.max"=> "maximum 50 karakter!",

            "ker_nev.required"=>"A mezőt kötelező kitölteni!",
            "ker_nev.min"=> "Minimum 1 karakter!",
            "ker_nev.max"=> "maximum 50 karakter!",

            "szul_ido.required" => "Kötelező kitölteni a mezőt!",
            "szul_ido.date" => "Csak dátum lehet!"
            ]
            );
    }
}
