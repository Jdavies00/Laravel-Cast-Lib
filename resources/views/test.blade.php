<!doctype html>    
    <html lang = "en">
        <head>
            <meta charset = "UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>App Name - @yield('title')</title>
        </head>
        <body>
            <h1>test complete!</h1>
            @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
<!-- http://127.0.0.1:8000/test -->