<html>
    <head>
        <title>Awesome Blog! - @yield('title', 'Default')</title>
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </head>
    <body>
        @if (auth()->check())
            <form action=" {{ url('logout') }}" method="post">
                @csrf
                <input type="submit" value="submit">
            </form>
        @endif
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
