<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quaestio</title>

        <!-- Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Style -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        @yield('head')

    </head>

    <body>
        <v-app id="app">
            <v-content>
                @yield('content')
                <i-footer><h1 class="text-xs-center display-4 white--text">footer</h1></i-footer>
            </v-content>
        </v-app>

        <script src="{{mix('js/app.js')}}"></script>
        @yield('body')
    </body>

</html>
