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
            <div class="blue-nav-inside">
                <p class="inline head-p">ADDITIONAL DC SITES </p>
                <p class="inline head-p">DC POWER VISA</p>
            </div>
        </div>

        <div class="nav-bar">
            <ul>
                <li>
                    <img class="logo" src=" {{ asset('images/dc-logo.png') }} " alt="logo">
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
                    <hr class="hr">
                </li>

            </ul>
        </div>
    </header>

    <main>

        <div class="bg-main"></div>

        <div class="bg-black-series">

            <div class="container">
                <div class="current-series">
                    <h1>CURRENT SERIES</h1>
                </div>
                <div>
                    @foreach ( $chiave as $comics )
                    <div class="card">
                        <div>
                            <img src=" {{ $comics['thumb'] }} " alt="">
                        </div>
                        <p class="series">{{ $comics['series'] }}</p>
                    </div>
                    @endforeach
                </div>

                <button class="button">
                    LOAD MORE
                </button>

            </div>
        </div>

        <div class="bg-color">
            <ul>
                <li class="li2"><img class="logo" src="../../public/images/buy-comics-digital-comics.png"></li>
                <p class="p">DIGITAL COMICS</p>
                <li class="li2"><img class="logo" src="../../public/images/buy-comics-merchandise.png"></li>
                <p class="p">DC MERCHANDISE</p>
                <li class="li2"><img class="logo" src="../../public/images/buy-comics-shop-locator.png"></li>
                <p class="p">SUBSCRIPTION</p>
                <li class="li2"><img class="logo" src="../../public/images/buy-comics-shop-locator.png"></li>
                <p class="p">COMIC SHOP LACATOR</p>
                <li class="li2"><img class="logo-svg" src="../../public/images/buy-comics-subscriptions.png"></li>
                <p class="p">DC POWER VISA</p>
            </ul>
        </div>
    </main>

    <footer>
        <div>
            <div class="inblock">
                <ul class="2">
                    <li>DC COMICS</li>
                    <li>Characters</li>
                    <li>Comics</li>
                    <li>Movies</li>
                    <li>TV</li>
                    <li>Games</li>
                    <li>Videos</li>
                    <li>News</li>
                </ul>
                <ul>
                    <li class="DCcomics">SHOP</li>
                    <li>Shop DC</li>
                    <li>Shop DC Collectibles</li>
                </ul>
            </div>
            <div class="inblock">
                <ul>
                    <li class="DCcomics">DC</li>
                    <li>Terms Of Use</li>
                    <li>Privacy policy (New)</li>
                    <li>ad Choices</li>
                    <li>Advertising</li>
                    <li>Jobs</li>
                    <li>Subscriptions</li>
                    <li>Talent Workshops</li>
                    <li>CPSC Certificates</li>
                    <li>Ratings</li>
                    <li>Shop Help</li>
                    <li>Contact Us</li>
                </ul>
            </div>

            <div class="inblock">
                <ul>
                    <li class="DCcomics">SITES</li>
                    <li>DC</li>
                    <li>MAD Magazine</li>
                    <li>DC kids</li>
                    <li>DC Universe</li>
                    <li>DC power Visa</li>
                </ul>
            </div>
            <div class="DC-bg"></div>
        </div>
    </footer>

</body>

</html>
