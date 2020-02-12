<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle') - {{ config('app.name', 'Laravel') }}</title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('assets/bootstrap-4.4.1/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
        
    </head>
    <body>
        <div id="app-container" class="">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <!-- js -->
        <script src="{{ asset('assets/jquery-2.2.4.min.js') }}"></script>
        <script src="{{ asset('assets/bootstrap-4.4.1/js/bootstrap.min.js') }}"></script>
    </body>
</html>
