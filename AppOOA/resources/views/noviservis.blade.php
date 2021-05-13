@extends('layouts.app1')
@section('content')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>

        <h1 >Unos servisa</h1>
        
        <div class='form-group'>
            <label for="idBrodice">Izaberite brodicu za servis:</label><br>
            <select name="idBrodice" id="idBrodice" required style="font-size: 20px">
                @foreach($brodice as $brodica)
                <option value="{{ $brodica->id }}">{{ $brodica->id }}, {{ $brodica->naziv }}, {{ $brodica->vrsta }}"></option>
                @endforeach
            </select>
        </div>
    <form method="POST" action="/noviservis/{{ $servis->id }}">
            @csrf
            <div class="form-group" >
                <label for="naziv">Datum servisa:</label>
                <input type="text" class="form-control" id="datum" name="datum"placeholder="Datum servisa" required>
            </div>
            <div class="form-group">
                <label for="opis_upita">Opis servisa:</label>
                <textarea class="form-control" name="opis" id="opis" rows="3" required></textarea><br>
                <button class="btn btn-primary" type="submit">Potvrdi servis</button>
            </div>
    </form>
@endsection
