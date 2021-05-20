@extends('layouts.app1')
@section('headcss')

@endsection
@section('headjs')

@endsection

@section('content')
@isset($message)
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endisset
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <h1>Pregled iznajmljenih brodica</h1><br><br>

    <table id= 'table' class="table table-light">
        <thead>
            <th style="width: 10%">Naziv brodice</th>
            <th style="width: 10%">Vrsta brodice</th>
            <th style="width: 10%">Cijena</th>
            <th style="width: 10%">Ime gosta</th>
            <th style="width: 10%">Prezime gosta</th>
            <th style="width: 10%">Email</th>
            <th style="width: 10%">Telefon</th>
            <th style="width: 10%">Datum iznajmljivanja</th>
            <th style="width: 10%"></th>
        </thead>
        <tbody>
            @foreach ($iznajmljenebrodice as $iznajmljenabrodica)
                <tr>
                    <td>
                        {{ $iznajmljenabrodica->brodica->naziv }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->brodica->vrsta }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->brodica->cijena }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->ime_gosta }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->prezime_gosta }}
                    </td> 
                    <td>
                        {{ $iznajmljenabrodica->email_gosta }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->telefon_gosta }}
                    </td>
                    <td>
                        {{ $iznajmljenabrodica->datum_iznajmljivanja }}
                    </td>
                    <td>
                        <form method="DELETE" action="/preglediznajmljenihbrodica/brisanje/{{ $iznajmljenabrodica->id }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">Brisanje</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script>
    $(window).on("load", function () {
            $('#table').DataTable();
        });
    </script>

@endsection
