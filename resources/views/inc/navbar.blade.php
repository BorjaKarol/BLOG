<div class="fixed-top">
  <div class="nav-header">
    <a class="logo" href="{{ url('/') }}"><strong>BLOG</strong></a>
    <ul class="navbar-header">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link-header" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link-header" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link-header dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                    <img id="navAvatar" src="/uploads/avatars/{{Auth::user()->avatar}}">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile">
                        Profile
                    </a>
                    <a class="dropdown-item" href="/home">
                        Dashboard
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
  </div>

    <nav id="nav-dark" class="navbar navbar-expand-md navbar-light shadow-sm shift">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav center-nav">
                    <li class="nav-item active">
                        <a class="nav-link nav-link-ltr" href="/">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/about">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/services">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-ltr" href="/posts">BLOG</a>
                    </li>
                    <div class="vl"></div>
                    <ul class="navbar-nav-icon">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/watch?v=hzMzrRWJw5Q" id="icon"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/watch?v=hzMzrRWJw5Q" id="icon"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/watch?v=hzMzrRWJw5Q" id="icon"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/watch?v=hzMzrRWJw5Q" id="icon"><i class="fa fa-youtube-play"></i></a>
                    </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
</div>