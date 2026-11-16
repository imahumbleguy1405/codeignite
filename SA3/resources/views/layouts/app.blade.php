<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tasks for Today Management System, built with Laravel for IT0049 TSA3.">
    <title>@yield('title', 'Today') · Tasks for Today</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="nav-wrap">
            <a class="brand" href="{{ route('welcome') }}"><span class="brand-mark">T</span><span>Tasks<span class="brand-light"> for Today</span></span></a>
            <nav aria-label="Main navigation">
                <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}" href="{{ route('welcome') }}">Welcome</a>
                <a class="nav-link {{ request()->routeIs('tasks.*') ? 'active' : '' }}" href="{{ route('tasks.index') }}">Task List</a>
                <a class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}" href="{{ route('profile') }}">Profile</a>
                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-inner"><span>Tasks for Today</span><span>IT0049 · TSA3 · Laravel</span></div>
    </footer>
</body>
</html>
