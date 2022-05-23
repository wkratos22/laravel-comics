<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<header>
    <div class="blue-nav">
        <p></p>
    </div>
        <div class="nav-bar">
            <ul>
                <li>
                    <img src=" {{ asset('images/dc-logo.png') }} " alt="logo">
                </li>
                <li>
                    <a href="{{ url('characters') }}">CHARACTERS</a>
                </li>
                <li>
                    <a href="{{ url('comics') }}">COMICS</a>
                </li>
                <li>
                    <a href="{{ url('movies') }}">MOVIES</a>
                </li>
                <li>
                    <a href="{{ url('tv') }}">TV</a>
                </li>
                <li>
                    <a href="{{ url('games') }}">GAMES</a>
                </li>
                <li>
                    <a href="{{ url('collectibles') }}">COLLECTIBLES</a>
                </li>
                <li>
                    <a href="{{ url('videos') }}">VIDEOS</a>
                </li>
                <li>
                    <a href="{{ url('fans') }}">FANS</a>
                </li>
                <li>
                    <a href="{{ url('news') }}">NEWS</a>
                </li>
                <li>
                    <a href="{{ url('shop') }}">SHOP</a>
                </li>
                <li>
                    <a>Search</a>
                </li>

            </ul>
        </div>
    </header>

    <main>

    </main>

    <footer>
        
    </footer>

</body>
</html>