<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zadanie rekrutacyjne</title>

    </head>
    <body class="antialiased">
        <button type="button"><a href="{{ route('proxy') }}">Click</a></button>
        <button type="button"><a href="{{ route('show') }}">Show statistics</a></button>
    </body>
</html>
