@extends('layouts.app1')
@section('content')
@include('layouts.errors')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>
    <form method="POST" action="/novabrodica">
    @csrf


        <h1 >Unos nove brodice</h1>
        <div class="form-group" >
            <label for="naziv">Naziv brodice:</label>
            <input type="text" class="form-control" id="naziv" name="naziv"placeholder="Naziv brodice" required>
        </div>

        <div class="form-group" >
            <label for="vrsta">Vrsta brodice:</label>
            <input type="text" class="form-control" id="vrsta" name="vrsta"placeholder="Vrsta brodice" required>
        </div>

        <div class="form-group">
            <label for="broj_ljudi">Maksimalan broj ljudi na brodici:</label>
            <input type="number" class="form-control" value="0" id="broj_ljudi" name="broj_ljudi" required>
        </div>

        <div class="form-group">
            <label for="cijena">Cijena iznajmljivanja brodice (kn/dan):</label>
            <input type="number" class="form-control" value="0" id="cijena" name="cijena" required>
        </div>

        <button class="btn btn-primary" type="submit" style="margin-left: 7%">Potvrdi unos</button>

        @include('layouts.alerts')
    </form>
@endsection
