@extends('layouts/master')
@section('title','Személyes adatok')
@section('content')
    <div class="container bg-secondary text-white rounded p-3 m-3">
        <div class="row">
            <div class="col-6">
                <h1>Személyes adatok</h1>
                <form method="POST">
                    @csrf
                    <div class="p-1">
                    <label for="vez_nev">Vezetéknév:</label>
                    <input type="text" name="vez_nev" id="vez_nev" class="form-control"></div>
                    <div class="p-1">
                    <label for="ker_nev">Keresztnév:</label>
                    <input type="text" name="ker_nev" id="ker_nev" class="form-control"></div>
                    <div class="p-1">
                    <label for="szul_ido">Születési idő:</label>
                    <input type="date" name="szul_ido" id="szul_ido" class="form-control"></div>
                    <div class="p-1">
                    <button type="submit" class="btn btn-dark">Rögzítés</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection