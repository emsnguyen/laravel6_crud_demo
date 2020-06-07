<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Travel Planet</a>
    <a class="nav-item nav-link" href="/hotels">Browse Hotels</a>
    @if(Route::has('login'))
        <div class="ml-auto">
            @auth
              <a class="nav-item nav-link" href="{{route('logout')}}">Logout</a>
            @else     
              <a class="nav-item nav-link" href="{{route('login')}}">Login</a>
            @endauth
        </div>
    @endif
</nav>
