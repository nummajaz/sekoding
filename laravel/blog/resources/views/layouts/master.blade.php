<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/css/master.css">
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/blog">Blog</a>
        </nav>
    </header>
    <br>

    @yield('content')

    <br>
    <footer>
        <p>
            &copy; laravel & sekolah koding 2019
        </p>
    </footer>
    <script src="/js/main.js">

    </script>
</body>
</html>

