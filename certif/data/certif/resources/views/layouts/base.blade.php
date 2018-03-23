<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magasin de Musique</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    
<header>
    <h1 class="LEH1">Magasin de Musique</h1>
    <nav>
        <ul>
            <li><a href="/listeDesInstruments">Instruments</a></li>
            <li><a href="/listeDesAlbums">Albums</a></li>
            <li><a href="/listeDesGenres">Genres</a></li>
        </ul>
    </nav>
</header>
    <main>
        @yield('main')
    </main>
    <main>
            @yield('main2')
    </main>
</body>
</html>