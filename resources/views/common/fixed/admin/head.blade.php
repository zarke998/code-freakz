<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield("title")</title>

    <link rel="icon" href="{{ asset("assets/images/favicon.png") }}" type="image/x-icon"/>

    <link href="{{ asset('assets/css/media_query.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>


    {{--Line icons--}}
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

    {{--Poppins font--}}
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    {{--Line Icons--}}
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="{{ asset('assets/css/style_1.css') }}" rel="stylesheet" type="text/css"/>

    {{--Main CSS--}}
    <link href="{{ asset('assets/css/main.css') }}" type="text/css" rel="stylesheet"/>

    {{--Admin CSS--}}
    <link href="{{ asset("assets/css/admin.css") }}" type="text/css" rel="stylesheet"/>

    @yield("stylesheets")
</head>

