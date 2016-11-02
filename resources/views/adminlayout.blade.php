<!DOCTYPE html>
<html>
    <head>
        <title>Administration - {{ $title }}</title>
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
    	@yield('content')
    </body>
</html>