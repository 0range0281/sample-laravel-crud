<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <style>
            html {
                background-image: url("2761366.jpg");
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
        </style>
        
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
    </body>

    <script src="{{ mix('js/app.js') }}"></script>
</html>