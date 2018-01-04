@extends('layouts.resources')

@section('app')

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="oi oi-map"></span> {{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul> --}}
            <ul class="navbar-nav ml-auto">
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-outline-light" href="javascript: void(0);"><span class="oi oi-account-logout"></span> Logout</button>
                        </form>
                        
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><span class="oi oi-account-login"></span> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><span class="oi oi-briefcase"></span> Register</a>
                    </li>
                @endauth
                
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>


{{-- <footer class="bg-dark text-white pt-5 pb-3 text-center">
    <div class="container">
        <p class="text-uppercase h4"><span class="oi oi-map"></span></p>
        <p>Author: <a href="https://github.com/goszowski" rel="nofollow" target="_blank">Goszowski</a></p>
    </div>
</footer> --}}

@endsection
