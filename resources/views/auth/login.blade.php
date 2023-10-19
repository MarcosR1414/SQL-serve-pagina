@extends('layouts.app')

@section('content')
<head>
    <link href="{{ asset('css/login.blade.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://www.dafontfree.net/embed/c2FudGVsaWEtcm91Z2gtYWx0LWJvbGQtdGhyZG1vJmRhdGEvNTEvcy8/2MTkzMi9TYA50RWxpYVJvdWdoQWx0Qm9sZFRockRFTU8ub3Rm" rel="stylesheet" type="text/css">
</head>

<body class="img" style="background-image: url(fondo/fond.jpg);">
    <div class="Nil">
        <h1>Senati</h1>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box">
                <h2>Iniciar sesión</h2>

                @if (isset($_GET['mensaje']))
                    <p style="color:white">{{ htmlspecialchars($_GET['mensaje']) }}</p>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="user-box">
                        <input type="text" name="email" required>
                        <label for="email">Correo</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="password" required>
                        <label for="password">Contraseña</label>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Iniciar sesión
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection

