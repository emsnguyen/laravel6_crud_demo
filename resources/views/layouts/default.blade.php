<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">
        <header class="row">
            @include('partials.nav')
        </header>
        <main class="row" id="main">
            @yield('content')
        </main>
    </div>
</body>
</html>