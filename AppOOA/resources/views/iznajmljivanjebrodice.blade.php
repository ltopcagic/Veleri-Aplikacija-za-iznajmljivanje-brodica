@extends('layouts.app1')
@section('content')
    <style>
        h1 {
            margin-left: 7%;
            font-weight: 200;

        }
    </style>

        <h1 >Iznajmljivanje brodice</h1>
        <div class="form-group" >
            <label>Naziv brodice: {{ $brodica->naziv }}</label>
        </div>

        <div class="form-group" >
            <label>Vrsta brodice: {{ $brodica->vrsta }}</label>
        </div>

        <div class='form-group'>
            <label>Maksimalan broj ljudi: {{ $brodica->broj_ljudi }}</label>
        </div>

        <div class="form-group" >
            <label>Cijena: {{ $brodica->cijena }}</label>
        </div>

    <form method="POST" action="/iznajmljivanjebrodice/{{ $brodica->id }}">
            @csrf
            <div class="form-group" >
                <label for="naziv">Ime gosta:</label>
                <input type="text" class="form-control" id="ime_gosta" name="ime_gosta"placeholder="Naziv brodice" required>
            </div>
    
            <div class="form-group" >
                <label for="vrsta">Prezime gosta:</label>
                <input type="text" class="form-control" id="prezime_gosta" name="prezime_gosta"placeholder="Vrsta brodice" required>
            </div>
    
            <div class="form-group">
                <label for="broj_ljudi">Email gosta:</label>
                <input type="email" class="form-control"  id="email_gosta" name="email_gosta" required>
            </div>
    
            <div class="form-group">
                <label for="cijena">Telefon gosta:</label>
                <input type="number" class="form-control" id="telefon_gosta" name="telefon_gosta" required>
            </div>

            <div class="form-group">
                <label for="broj_ljudi">Datum iznajmljivanja:</label>
                <input type="date" class="form-control"  id="datum_iznajmljivanja" name="datum_iznajmljivanja" required>
            </div>
            
            <button class="btn btn-primary" type="submit" style="margin-left: 7%">Iznajmi</button>
            
    </form>
@endsection
