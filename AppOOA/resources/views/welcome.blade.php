@extends('layouts.app')

@section('content')

    <body class="text-center">

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

            <main role="main" class="inner cover">
                <h1 class="cover-heading">Aplikacija za iznajmljivanje brodica</h1>
                <div class="mt-4">
                    <p class="lead">Aplikacija služi za bolji pregled i organizaciju brodica u agenciji.
                    </p>
                </div>
                <p class="lead">
                    <div class="center">
                        <a href="{{ route('login') }}" class="btn btn-lg btn-secondary razmak">Prijava </a>
                        <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Registracija</a>
                    </div>
                    
                </p>
            </main>
        </div>


        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

        </script>
        <script src="../../assets/js/vendor/popper.min.js"></script>
        <script src="../../dist/js/bootstrap.min.js"></script>

    </body>
@endsection