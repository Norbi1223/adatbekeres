<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adatbekeres;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [adatbekeres::class,"bekuld"]);
Route::post('/', [adatbekeres::class,"rogzit"]);
