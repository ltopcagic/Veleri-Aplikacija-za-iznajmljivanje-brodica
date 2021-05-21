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
    <h1>Pregled čišćenja</h1><br><br>
    <a href="/novociscenje/create" class="btn btn-primary">Unos novog čišćenja</a><br><br>

    <table id= 'table' class="table table-light">
        <thead>
            <th style="width: 10%">Naziv</th>
            <th style="width: 10%">Vrsta</th>
            <th style="width: 10%">Datum čišćenja</th>
            <th style="width: 10%"></th>
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
                    <td>
                        <form method="POST" action="/pregledciscenja/brisanje/{{ $ciscenje->id }}">
                            @csrf
                            @method('delete')
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
