<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        @livewireStyles
        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
               


    </head>
    <body>
        @extends('adminlte::page')
        @section('title', 'Dashboard')
        
        @section('content_header')
            
        @stop
        
        @section('content')
            <p>Welcome to this beautiful admin panel.</p>
        @stop
        
        @section('css')
            <link rel="stylesheet" href="/css/admin_custom.css">
            <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
            
            @stop
        @section('js')
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
         
        @stop  
    </body>
       @stack('modals')
       @livewireScripts
       
    </body>
</html>
