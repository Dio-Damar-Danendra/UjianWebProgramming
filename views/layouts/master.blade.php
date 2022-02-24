<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Scripts  -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <a class="navbar-brand" href="/" style="font-family: Comic Sans MS; text-align: center; display: block; font-size: 30pt; color: red; background-color: yellow">HAPPY BOOK STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="font-family: Comic Sans MS; text-align: center;	min-width: 1%; list-style: none; padding-left: 42%;">
            <li class="nav-item {{ request()->routeIs('home')? 'active': '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item {{ request()->routeIs('fictionbooks')? 'active': '' }}" href="{{ route('fictionbooks') }}">Fiction</a>
                <a class="dropdown-item {{ request()->routeIs('nonfictionbooks')? 'active': '' }}" href="{{ route('nonfictionbooks') }}">Non-Fiction</a>
                <a class="dropdown-item {{ request()->routeIs('languagebooks')? 'active': '' }}" href="{{ route('languagebooks') }}">Language</a>
                <a class="dropdown-item {{ request()->routeIs('childrenbooks')? 'active': '' }}" href="{{ route('childrenbooks') }}">Children</a>
                <a class="dropdown-item {{ request()->routeIs('sciencebooks')? 'active': '' }}" href="{{ route('sciencebooks') }}">Science</a>
                <a class="dropdown-item {{ request()->routeIs('computerbooks')? 'active': '' }}" href="{{ route('computerbooks') }}">Computer</a>
                <a class="dropdown-item {{ request()->routeIs('comics')? 'active': '' }}" href="{{ route('comics') }}">Comics</a>
              </div>
            </li>
            <li class="nav-item {{ request()->routeIs('contact')? 'active': '' }}">
                <a class="nav-link {{ request()->routeIs('contact')? 'active': '' }}" href="{{ route('contact') }}">Contact</a>
              </li>
          </ul>
        </div>
      </nav>

    @yield('content')
    
</body>

<footer class="navbar-brand" href="/" style="font-family: Comic Sans MS; text-align: center; display: block; font-size: 26pt; color: red; background-color: yellow">
  <p>© Happy Book Store 2021</p>
</footer>
</html>