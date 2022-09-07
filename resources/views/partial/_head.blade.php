<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'You are Good') }} </title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <style>
        .theme-bg-light {
            background: rgb(41 40 182 / 11%) !important;
            background-image: initial !important;
            background-position-x: initial !important;
            background-position-y: initial !important;
            background-size: initial !important;
            background-repeat-x: initial !important;
            background-repeat-y: initial !important;
            background-attachment: initial !important;
            background-origin: initial !important;
            background-clip: initial !important;
            background-color: rgba(41, 40, 182, 0.11) !important;
        }
        .dashboard-nav ul li.active, .dashboard-nav ul li:hover {
            border-color: #0001A2;
            background-color: rgba(41, 40, 182,0.1);
        }

        .theme-bg {
            background: #ff0000 !important;

        }

    </style>
    @yield('styles')

</head>
