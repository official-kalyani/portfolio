<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="{{ route('home') }}">Portfolio</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                @auth
                @if(auth()->user()->is_admin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.projects.index') }}">Projects (Admin)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                @endif

                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link" style="display: inline; padding: 0; margin: 0; border: none; background: none;">
                            Logout
                        </button>
                    </form>
                </li>
                @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                @endauth
            </ul>

        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

