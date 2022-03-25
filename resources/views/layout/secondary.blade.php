<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/secondary.css') }}">
    </head>

<body>

    <header>
        <nav>
            <ul>
                <li> <a id="app-name" href="/"> Blogpedia </a> </li>
                <li class="nav-items"> <a href="/manage"> Manage </a></li>
                <li class="nav-items"> <a href="/@yield('route')"> @yield('route-label') </a></li>
            </ul>
        </nav>
    </header>

    <hr class="div-hr">

    <main>
        <h1 class="page-head"> @yield('title') </h1>

        <hr>

        <div class="content">
            @yield('page-content')
        </div>
    </main>

</body>

</html>
