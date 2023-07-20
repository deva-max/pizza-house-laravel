<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://github.com/dami-akinbi/pizzahouse/tree/5a53887137fbe46fc3bdb83e83c2400e4c5b75e4/resources/sass">
        

        <!-- Styles -->
       <link href="css/app.css" rel="stylesheet">

    </head>
    <body class="antialiased">

        @yield('content')
        <footer>
            Copyright 2020 Pizza House
        </footer>
    </body>
</html>