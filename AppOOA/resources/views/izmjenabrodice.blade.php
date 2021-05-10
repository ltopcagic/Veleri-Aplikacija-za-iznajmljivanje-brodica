@extends('layouts.app1')
@section('content')
@include('layouts.errors')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>
    <form method="POST" action="/pregledbrodica/{{ $brodica->id }}/">
        @csrf
        @method('put')

        <h1 >Izmjena brodice</h1>

        <div class="form-group" >
            <label for="naziv">Naziv brodice:</label>
            <input type="text" class="form-control" id="naziv" name="naziv"placeholder="Naziv brodice" required value="{{ $brodica->naziv }}">
        </div>

        <div class="form-group" >
            <label for="vrsta">Vrsta brodice:</label>
            <input type="text" class="form-control" id="vrsta" name="vrsta"placeholder="Vrsta brodice" required value="{{ $brodica->vrsta }}">
        </div>

        <div class="form-group">
            <label for="broj_ljudi">Maksimalan broj ljudi na brodici:</label>
            <input type="number" class="form-control"  id="broj_ljudi" name="broj_ljudi" required value="{{ $brodica->broj_ljudi }}">
        </div>

        <div class="form-group">
            <label for="cijena">Cijena iznajmljivanja brodice:</label>
            <input type="number" class="form-control"  id="cijena" name="cijena" required value="{{ $brodica->cijena }}">
        </div>

        <button class="btn btn-primary" type="submit" style="margin-left: 7%">Potvrdi izmjenu</button>

        @include('layouts.alerts')
    </form>
@endsection
