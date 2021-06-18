<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EpicPelis</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Estilo para las peliculas-->
        <style>
            h5{
                display: inline-block;
                margin: 0px;}
            #texto_centro{
                color: orange;
            }
            .custom {
                background-color: white;
            }

            .sing-colm {
                background-color: orange;
                width: 1000px;
                margin: 0 auto;
                padding-top: 40px;
                padding-bottom: 40px;
                z-index: 0;}

            .content-movie {
                display: flex;
                align-items: flex-start;
                flex-wrap: nowrap;
                padding: 0em 4em;}

            .content-img {
                display: block;
                width: 300px;
                height: 450px;
                position: relative;
                z-index: 2;}

            #info-movie {
                color: #fff;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                align-content: center;
                width: 700px;
                box-sizing: border-box;
                padding-left: 40px;}

            .box-title {
                width: 100%;
                margin-bottom: 30px;}


            #title {
                font-size: 2.4em;
                line-height: 1.1em;
                font-weight: 700;
                display: inline-block;
                margin: 0px;
                padding: 0px;}

            #year {
                opacity: 0.6;
                font-size: 1.3em;
                font-weight: 400;}

            #genero {
                font-size: 1.8em;
                font-weight: 400;
                margin: 0px;}

            #timer {
                opacity: 0.6;
                font-weight: 400;
            }


            ol {
                line-height: 1.4em;
            }

            li {
                display: list-item;
            }

            ol.people {
                list-style-type: none;
                list-style-position: inside;
                display: flex;
                margin: 0px;
                padding: 0px;
            }

            ol.people li {
                width: 140px;
                box-sizing: border-box;
                margin-right: 10px;
            }

            #profile {
                background-color: transparent;
                height: auto;
                margin-bottom: 0px;
            }



            #logo {
                margin: -20px;
                width: 35vh;
                height: auto;
                position: relative;
                background-color:;

            }

            .nav-content{
                margin-top: 20vh;
            }


            .tabs {
                background-color: #4a148c;
                color: #FFF;
            }

            .tabs .tab a {
                color: #aa00ff;
            }

            .tabs .tab a:hover, .tabs .tab a.active {
                background-color: transparent;
                color: #fff;}

            nav {
                color: #311b92;
                background-color: #7e57c2;
                width: 100%;
                height: 56px;
                line-height: 56px;
            }

            input[type=search]:not(.browser-default):focus:not([readonly]),
            textarea.materialize-textarea:focus:not([readonly]) {
                border-bottom: 1px solid #e040fb;
                -webkit-box-shadow: 0 1px 0 0  rgba(0, 0, 0, 0.87);
                box-shadow: 0 1px 0 0  rgba(0, 0, 0, 0.87);
            }


            input[type=search]:not(.browser-default):focus:not([readonly]) + label,
            textarea.materialize-textarea:focus:not([readonly]) + label {
                color:  rgba(245, 118, 0, 1);
            }

            .height-card{
                height: 126vh;
            }

            #map{
                width: 100%;
                height: 500px;
            }

            #video{
                background-image: url("https://78.media.tumblr.com/9031a5bf169889cf7b311a7f612701ff/tumblr_nxbp5iPR4F1s60oo7o1_400.gif");
                background-size: 1400px 300px;
                background-repeat: no-repeat;
                background-position: center;
            }

            .content-movie {
                display: flex;
                align-items: flex-start;
                flex-wrap: nowrap;
                padding: 0em 4em;
            }

            .content-img {
                display: block;
                width: 300px;
                height: 450px;
                position: relative;
                z-index: 2;
            }

            #info-movie {
                color: #fff;
                display: flex;
                flex-wrap: wrap;
                align-items: flex-start;
                align-content: center;
                width: 700px;
                box-sizing: border-box;
                padding-left: 40px;
            }

            .box-title {
                width: 100%;
                margin-bottom: 30px;
            }


            #title {
                font-size: 2.4em;
                line-height: 1.1em;
                font-weight: 700;
                display: inline-block;
                margin: 0px;
                padding: 0px;
            }

            #year {
                opacity: 0.6;
                font-size: 1.3em;
                font-weight: 400;
            }

            #genero {
                font-size: 1.8em;
                font-weight: 400;
                margin: 0px;
            }

            #timer {
                opacity: 0.6;
                font-weight: 400;
            }


            ol {
                line-height: 1.4em;
            }

            li {
                display: list-item;
            }

            ol.people {
                list-style-type: none;
                list-style-position: inside;
                display: flex;
                margin: 0px;
                padding: 0px;
            }

            ol.people li {
                width: 140px;
                box-sizing: border-box;
                margin-right: 10px;
            }

            #profile {
                background-color: transparent;
                height: auto;
                margin-bottom: 0px;
            }
        </style>

        @livewireStyles
        <link rel="shortcut icon" href="https://i.ibb.co/CmWZvGm/Logo-Epic-Pelis.png" />
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Encabezado de página -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Contenido de página -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
