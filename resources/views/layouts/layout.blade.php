<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?v=') . time() }}">
    <title>Scratcher</title>
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Scratcher</h4>
        </div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Blog</a></li>
            <li><a href="/categories">Category</a></li>
            @auth
            <li><a href="/about">About</a></li>
            <li>
                <form action="/logout" method="POST" id="nav-logout">
                    @csrf
                  <a type="submit" href="javascript:{}" onclick="document.getElementById('nav-logout').submit();">Logout</a>
                </form>
                @else
                <a href="/login">Login</a>
                @endauth
            </li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    @yield('content')
</body>
{{-- <footer class="footer">
    <div class="footer_bg">
        <p class="footer_copy">😽 Yasya Indra Technology.</p>
    </div>
</footer> --}}
<script src="{{asset('js/script.js')}}"></script>

</html>
