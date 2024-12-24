<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <a href="/" class="logo">Chill Library</a>
            <nav>
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/vision">Vision</a>
                <a href="/contact">Contact Us</a>
                <a href="/signin">Signin</a>
                <a href="/signup">Sign Up</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
        <p>&copy; 2024 Chill Library. All rights reserved.</p>
    </footer>
</body>
</html>
