<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEDIMETRO</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #e6f2ff;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header img {
            height: 100px;
        }

        .banner {
            background-image: url('https://www.muniguate.com/movilidadurbana/wp-content/uploads/sites/33/2023/05/Portada-web-TuBus.jpg');
            background-size: cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2em;
            text-shadow: 2px 2px 4px #000;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .gallery img {
            margin: 10px;
            border-radius: 15px;
            height: 200px;
            width: 300px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .gallery img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .auth-links {
            position: absolute;
            top: 10px;
            right: 10px;
            display: flex;
            align-items: center;
        }

        .auth-links a {
            margin-left: 10px;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .auth-links a:hover {
            color: #ccc;
        }
    </style>
</head>

<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c0/Logo_Transmetro_Guatemala.svg"
            alt="Logo Transmetro Guatemala">
        <h1>Transmetro Guatemala</h1>
        <div class="auth-links">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Ingresar</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-success btn-lg">Registrarse</a>
                @endif
            @else
                <a href="{{ route('home') }}" class="btn btn-info btn-lg">Inicio</a>
            @endguest
        </div>
    </header>
    <div class="banner">
        Bienvenidos al Transmetro Guatemala
    </div>
    <div class="gallery">
        <img src="https://pbs.twimg.com/media/FysRLQKWYAEcvmn?format=jpg&name=4096x4096" alt="Transmetro Image 1">
        <img src="https://rutastransmetro.muniguate.com/off_line_01.png" alt="Transmetro Image 2">
        <img src="https://www.muniguate.com/wp-content/uploads/2022/02/bf614a22-2300-432d-9799-7cd562019b4e.jpg"
            alt="Transmetro Image 3">
    </div>
</body>

</html>
