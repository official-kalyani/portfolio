<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="{{ route('home') }}">My Portfolio</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('my-projects') }}">Projects</a></li>
            </ul>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-light text-center py-3 mt-4">
        &copy; {{ date('Y') }} My Portfolio. All rights reserved.
    </footer>
</body>
</html>
