<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            "vez.nev.max"=> "Maximum 50 karakter!",

            "ker_nev.required"=>"A mezőt kötelező kitölteni!",
            "ker_nev.min"=> "Minimum 1 karakter!",
            "ker_nev.max"=> "Maximum 50 karakter!",

            "szul_ido.required" => "Kötelező kitölteni a mezőt!",
            "szul_ido.date" => "Csak dátum lehet!"
            ]
            );
            DB::insert("INSERT INTO adatok(vez_nev, ker_nev,szul_ido) VALUES (?,?,?)",[$req->get('vez_nev'),$req->get('ker_nev'),$req->get('szul_ido'),]);
            return redirect("/")->with("kesz","Az adatfelvétel sikeres!");
        }
}