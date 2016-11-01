<!DOCTYPE html>
<html>
    <head>
        <title>funforall - {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{ elixir('css/styles.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ elixir('css/unsemantic.css') }}">
        <script src="{{ elixir('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ elixir('js/jquery.glide.min.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
    </head>
    <body>
        <nav class="big hide-on-mobile hide-on-tablet">
            <ul>
                <li><a href="/" class="brand"><img src="{{ elixir('images/soleil.png') }}"></a></li>
                <li><a href="/materiel">Matériel</a></li>
                <li><a href="#!">Témoignages</a></li>
                <li><a href="#!">News</a></li>
                <li><a href="/galerie">Galerie</a></li>
                <li><a href="/lien">Lien</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div class="menu-btn hide-on-desktop">
            <a href="#!"><i class="fa fa-bars fa-2x"></i></a>
        </div>
        <nav class="small hide-on-desktop">
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/materiel">Matériel</a></li>
                <li><a href="#!">Témoignages</a></li>
                <li><a href="#!">News</a></li>
                <li><a href="/galerie">Galerie</a></li>
                <li><a href="/lien">Lien</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
            @yield('content')
        <footer>
            <p>Copyright &copy; funforall.ch made by Ivan&nbsp;Biedermann</p>
        </footer>
    </body>
</html>