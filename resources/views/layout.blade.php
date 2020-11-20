<!DOCTYPE html>
<html>
<head>
    <title>SD27 Staff Portal</title>

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>

<body>
<header>
    <div class="nav-border">
        <nav id="bootstrap-overrides" class="navbar navbar-expand-md fixed-top">
            <a href="http://web.sd27.bc.ca" class="navbar-brand">
                <img src="{{ asset('img/logo-text.svg') }}" alt="sd27 logo"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
{{--            <div class="collapse navbar-collapse" id="navbarCollapse">--}}
{{--                <ul class="navbar-nav mr-auto">--}}

{{--                </ul>--}}
{{--                <ul class="navbar-nav justify-content-end">--}}
{{--                    @if(isset($userName))--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"--}}
{{--                               aria-haspopup="true" aria-expanded="false">--}}
{{--                                @if(isset($user_avatar))--}}
{{--                                    <img src="{{ $user_avatar }}" class="rounded-circle align-self-center mr-2"--}}
{{--                                         style="width: 32px;">--}}
{{--                                @else--}}
{{--                                    <i class="far fa-user-circle fa-lg rounded-circle align-self-center mr-2"--}}
{{--                                       style="width: 32px;"></i>--}}
{{--                                @endif--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                <h5 class="dropdown-item-text mb-0">{{ $userName }}</h5>--}}
{{--                                <p class="dropdown-item-text text-muted mb-0">{{ $userEmail }}</p>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                                <a href="{{ route('signout') }}" class="dropdown-item">Sign Out</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{ route('signin') }}" class="nav-link">Sign In</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
        </nav>
    </div>
</header>
<main role="main" class="container">
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            <p class="mb-3">{{ session('error') }}</p>
            @if(session('errorDetail'))
                <pre class="alert-pre border bg-light p-2"><code>{{ session('errorDetail') }}</code></pre>
            @endif
        </div>
    @endif

    @yield('content')
</main>

<footer>
    <nav class="navbar navbar-expand-md" id="bootstrap-overrides">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="https://sitegovern.sd27.bc.ca/site" class="nav-link">Admin Login</a>
            </li>
        </ul>
    </nav>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
