<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
    <script type="module">
        $(".btn").click(function(){
            $('.btn-success').html('Loading ...');
        });
    </script>
  
</head>
<body>
    <div id="app">
  
        <main class="container">
            <h3>How to Install JQuery in Laravel</h3>
              
            <button class="btn btn-success">Click Me</button>
        </main>
    </div>
  
</body>
</html>	