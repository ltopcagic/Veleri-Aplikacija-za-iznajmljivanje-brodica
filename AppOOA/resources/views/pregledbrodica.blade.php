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
    <h1>Pregled brodica</h1><br><br>
    <a href="/novabrodica/create" class="btn btn-primary">Unos nove brodice</a><br><br>

    <table class="table table-light">
        <thead>
            <th style="width: 10%">Naziv</th>
            <th style="width: 10%">Vrsta</th>
            <th style="width: 10%">Broj ljudi</th>
            <th style="width: 10%">Cijena iznajmljivanja</th>
            <th style="width: 10%"></th>
            <th style="width: 10%"></th>
            <th style="width: 10%"></th>
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
                        <a href="" class="btn btn-primary">Izmjena</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Brisanje</a>
                    </td>
                    <td>
                        <a href="" class="btn btn-primary">Iznajmljivanje</a>
                    </td>
    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

@endsection
