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
    <h1>Pregled brodica</h1><br><br>
    <a href="/novabrodica/create" class="btn btn-primary">Unos nove brodice</a><br><br>

    <table id= 'table' class="table table-light">
        <thead>
            <th style="width: 10%">Naziv</th>
            <th style="width: 10%">Vrsta</th>
            <th style="width: 10%">Broj ljudi</th>
            <th style="width: 10%">Cijena iznajmljivanja</th>
            <th style="width: 10%"></th>
            <th style="width: 10%"></th>
            <th style="width: 10%"></th>
            <th style="width: 10%"></th>
            <th style="width: 12%"></th>
        </thead>
        <tbody>
            @foreach ($brodice as $brodica)
                <tr>
                    <td>
                        {{ $brodica->naziv }}
                    </td>
                    <td>
                        {{ $brodica->vrsta }}
                    </td>
                    <td>
                        {{ $brodica->broj_ljudi }}
                    </td>
                    <td>
                        {{ $brodica->cijena }}
                    </td>
                    <td>
                        <a href="/pregledbrodica/{{ $brodica->id }}/izmjenabrodice" class="btn btn-primary">Izmjena</a>
                    </td>
                    <td>
                        <form method="DELETE" action="/pregledbrodica/{{ $brodica->id }}">
                            @csrf
                            <button class="btn btn-primary" type="submit">Brisanje</button>
                        </form>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Iznajmljivanje</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Novi servis</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Novo čišćenje</a>
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
