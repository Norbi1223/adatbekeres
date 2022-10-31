@extends('layouts/master')
@section('title','Személyes adatok')
@section('content')
    <div class="container bg-secondary text-white rounded p-3 m-3">
        <div class="row">
            <div class="col-6">
                <h1>Személyes adatok</h1>
                <form method="POST">
                    @csrf
                    @if (session()->get('kesz'))
                        <div class="alert alert-success">
                            {{session()->get('kesz')}}
                        </div>
                    @endif
                    <div class="p-1">
                    <label for="vez_nev">Vezetéknév:</label>
                    <input type="text" name="vez_nev" id="vez_nev" class="form-control" value="{{old('vez_nev')}}">
                @error('vez_nev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror</div>
                    <div class="p-1">
                    <label for="ker_nev">Keresztnév:</label>
                    <input type="text" name="ker_nev" id="ker_nev" class="form-control" value="{{old('ker_nev')}}">
                    @error('ker_nev')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror</div>
                    <div class="p-1">
                    <label for="szul_ido">Születési idő:</label>
                    <input type="date" name="szul_ido" id="szul_ido" class="form-control" value="{{old('szul_ido')}}">
                    @error('szul_ido')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror</div>
                    <div class="p-1">
                    <button type="submit" class="btn btn-dark">Rögzítés</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection