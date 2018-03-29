<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>9punto5 - Expande tus habilidades digitales</title>

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app>
        @yield('content')
    </v-app>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@if (!App::environment('local')) {
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71935191-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-71935191-4');
</script>
@endif
</body>
</html>
