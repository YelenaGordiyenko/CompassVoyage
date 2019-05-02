<nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="CV_logo.png" width="200px" height="70px" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/packages">Packages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/flights">Flights</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/contactus">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="/posts">Blog</a>
        </li>
      </ul>
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/dashboard">Dashboard</a>
              @hasrole('user')
              <a href="/travels/create" class="dropdown-item">My Trip Request</a>
              <a href="/posts/create" class="dropdown-item">Create Post</a>
              @endhasrole
              @hasrole('admin')
                <a class="dropdown-item" href="{{ route('admin.users.index') }}">Manage Users</a>
                <a class="dropdown-item" href="/travels">Travel Requests</a>
              @endhasrole
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
  </div>
</nav>