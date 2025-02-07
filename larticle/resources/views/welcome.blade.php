<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <script>window.Laravel = {csrfToken : '{{csrf_token()}}'}</script>

        <title>Larticles App</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito" type="text/css">
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
    </head>
    <body>
        <div id="app">
            <Navbar></Navbar>
            <div class="container">
                <Articles></Articles>
            </div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
