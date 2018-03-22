<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magasin de Musique</title>
</head>
<body>
    <h1>Magasin de Musique</h1>
<header>
    <nav>
        <ul>
            <li><a href="/listeDesInstruments">Liste des instruments</a></li>
            <li><a href="/listeDesAlbums">Liste des albums</a></li>
        </ul>
        <ul>
            <li><a href="/insertAlbum">Ajouter un album</a></li>
            <li><a href="/insertInstrument">Ajouter un instrument</a></li>
        </ul>
    </nav>
</header>
    <main>
        @yield('main')
    </main>
</body>
</html>