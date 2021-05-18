@extends('layouts.app1')
@section('content')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>

        <h1 >Unos čišćenja</h1>
        <form method="POST" action="/novociscenje">
            @csrf

        <div class='form-group'>
            <label for="idBrodice">Izaberite brodicu za čišćenje:</label><br>
            <select name="idBrodice" id="idBrodice" required style="font-size: 20px">
                @foreach($brodice as $brodica)
                <option value="{{ $brodica->id }}">{{ $brodica->naziv }}, {{ $brodica->vrsta }}</option>
                @endforeach
            </select>
        </div>

            <div class="form-group" >
                <label for="naziv">Datum čišćenja:</label>
                <input type="date" class="form-control" id="datum" name="datum" placeholder="Datum čišćenja" required><br>
                <button class="btn btn-primary" type="submit">Potvrdi čišćenje</button>
            </div>
    </form>
@endsection
