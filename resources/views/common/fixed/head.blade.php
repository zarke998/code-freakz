<!DOCTYPE html>

<html lang="en" class="no-js">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield("title")</title>

        <link rel="icon" href="{{ asset("assets/images/favicon.png") }}" type="image/x-icon"/>


        <link href="{{ asset('assets/css/media_query.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>

        {{--Line Icons--}}
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
              integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('assets/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap CSS -->
        <link href="{{ asset('assets/css/style_1.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Modernizr JS -->
        <script src="{{ asset('assets/js/modernizr-3.5.0.min.js') }}"></script>

        {{--Materialize Icons--}}
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        {{--Main CSS--}}
        <link href="{{ asset('assets/css/main.css') }}" type="text/css" rel="stylesheet"/>

        @yield("stylesheets")
    </head>

