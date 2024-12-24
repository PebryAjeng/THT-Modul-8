<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Cozy Library</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1><a href="/">Cozy Library</a></h1>
            <nav>
                <a href="/">Home</a>
                <a href="/explore">Explore</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                <a href="/vision">Vision</a>
                <a href="/signin">Sign In</a>
                <a href="/signup">Sign Up</a>
            </nav>
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer class="footer">
        <p>&copy; 2024 Cozy Library. All rights reserved.</p>
    </footer>
</body>
</html>
