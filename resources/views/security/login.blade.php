<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Educativa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
        }

        .form-control {
            line-height: 2;
        }

        .bg-custom {
            background-color: #ff8d5d;
        }

        .btn-custom {
            background-color: #8D5DFF;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #601DFF;
            color: #fff;
        }

        .bg-image {
            background-image: url("{{ asset('images/background.jpg') }}");
            height: 100vh;
            background-size: cover;
            background-position: center center;
        }

        .img-size {
            width: 100px;
        }

        label {
            color: #fff;
        }

        a,
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        @media(max-width: 932px) {
            .display-none {
                display: none !important;
            }
        }
    </style>
</head>
<body>
    <div class="row m-0 h-100 w-100 bg-black">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <div class="bg-image d-flex justify-content-center align-items-center">
                <img src="{{ asset('images/logoentero.png') }}" class="w-100 p-2">
            </div>
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <img src="{{ asset('images/storytelling.png') }}" class="img-size mb-2">
            <h2 class="text-light fw-bold">Iniciar Sesión</h2>
            <form class="w-75" action="#">
                <div class="mb-3">
                    <label for="rut" class="form-label fw-bold">Rut</label>
                    <input type="text" class="form-control" id="rut" name="rut" placeholder="Rut"
                        required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña"
                        required>
                </div>
                <button type="button" class="btn btn-custom btn-lg btn-block mt-3">Ingresar</button>
            </form>
        </div>
    </div>
</body>