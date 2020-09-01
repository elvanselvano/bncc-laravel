<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <Link rel="stylesheet" href="/css/bootstrap.min.css">
    <link href="/css/welcome.css" rel="stylesheet">
</head>
<body>
      <!-- ### NAVIGATION BAR ### -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Brand Logo -->
    <a class="navbar-brand" href="/">
      <img src="https://bncc.net/assets/img/BNCC_T.png" alt="brand logo" class="logo">
    </a>

    <!-- Collapse Menu -->
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="/">TOP STORIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">CORONAVIRUS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">TECHNOLOGY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">BUSINESS</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              MORE
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button">CULTURE</button>
              <button class="dropdown-item" type="button">POLITICS</button>
              <button class="dropdown-item" type="button">SCIENCE</button>
              <button class="dropdown-item" type="button">WORLD</button>
              <button class="dropdown-item" type="button">TRAVEL</button>
              <button class="dropdown-item" type="button">SPORT</button>
            </div>
          </div>
        </li>
      </ul>

      <a href="/article" class="btn btn-primary">POST ARTICLE</a>
    </div>
  </nav>

    @yield('content');
    <!-- Footer -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <footer>&copy; Copyright 2020</footer>
        </div>
    </div>
</body>
</html>
