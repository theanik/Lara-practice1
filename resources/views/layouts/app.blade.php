<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Lara Basic')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
</head>
<body> 
    <script>
       // var alrtMsg = document.querySelector('#alrtMsg');
        setTimeout(() => {
          document.getElementById("alrtMsg").style.display = "none";
        }, 10000);

   </script>
    <div id="app">
        @include('nav',['profile'=>'Anik Anwar'])

        <main class="py-4">
            <div class="container">
            @if(session()->has('message'))
            <div class="alert alert-success" id="alrtMsg">
                <strong>Success</strong> {{session()->get('message')}}
            </div>
            @endif
            @yield('content')
            </div>
            
        </main>
    </div>
</body>
</html>
