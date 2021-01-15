<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>@yield('title')</title>
    @yield('head')
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item {{request()->is('/') ? 'active' : ''}}">
              <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{request()->is('book') ? 'active' : ''}}">
              <a class="nav-link" href="{{url('book')}}">Book</a>
            </li>
            <li class="nav-item {{request()->is('movie') ? 'active' : ''}}">
              <a class="nav-link" href="{{url('movie')}}">Movie</a>
            </li>
          </ul>
        </div>
    </div>
      </nav>
      <div class="container mt-3">
        @yield('content')
      </div>

      @yield('script')
  </body>
</html>