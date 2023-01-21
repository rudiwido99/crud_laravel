<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | Kopi Kenangan Kita</title>
    
    {{-- Bootstrap Style & Icon --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    {{-- Feather-icons --}}
    <script src="https://unpkg.com/feather-icons"></script>
    
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="/css/style.css">

  </head>
  <body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Sport Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link @if($active == 'home') active @endif" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if($active == 'about') active @endif" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if($active == 'blog') active @endif" href="{{ url('posts') }}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if($active == 'categories') active @endif" href="{{ url('categories') }}">Categories</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="bi bi-person-circle">  {{ auth()->user()->name }}</i>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ url('dashboard') }}"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                        <form action="logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                @else 
                  <li class="nav-item">
                    <a href="/login" class="nav-link @if($active == 'login') active @endif"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                  </li>
                @endauth
            </ul>
            </div>
        </div>
    </nav> --}}

    {{-- Navbar --}}
    <nav class="navbar">
      <a href="#" class="navbar-logo">Kenangan<span>Kita</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#">Kontak</a>
        <a href="#">Artikel</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    {{-- Navbar End --}}


    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    {{-- Feather Icon --}}
    <script>
      feather.replace()
    </script>

    {{-- My Javascript  --}}
    <script src="js/script.js"></script>

  </body>
</html>