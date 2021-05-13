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
    <h1>Pregled čišćenja</h1><br><br>
    <a href="/novociscenje/create" class="btn btn-primary">Unos novog čišćenja</a><br><br>

    <table class="table table-light">
        <thead>
            <th style="width: 10%">Naziv</th>
            <th style="width: 10%">Vrsta</th>
            <th style="width: 10%">Datum čišćenja</th>
            <th style="width: 10%">Opis servisa</th>
        </thead>
        <tbody>
            @foreach ($ciscenja as $ciscenje)
                <tr>
                    <td>
                        {{ $ciscenje->brodica->naziv }}
                    </td>
                    <td>
                        {{ $ciscenje->brodica->vrsta }}
                    </td>
                    <td>
                        {{ $ciscenje->datum }}
                    </td>
    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

@endsection
