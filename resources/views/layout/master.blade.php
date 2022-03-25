<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>Blogpedia</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Header Section -->
    <header>

        <!-- Navigation Bar -->
        <nav>
            <ul>
                <li> <a id="app-name" href="/"> Blogpedia </a> </li>
                <li class="nav-items"> <a href="#blogs"> Explore </a></li>
                <li class="nav-items"> <a href="/manage"> Manage </a></li>
                <li class="nav-items"> <a href="/contact"> Contact </a></li>
                <li class="nav-items"> <a href="/projects"> My Other Projects </a></li>
            </ul>
        </nav>

        <div class="h-title">
            <h1>Welcome to Blogpedia!</h1>
            <h3>Home To Plethora of Blogs and World Exploration.</h3>
        </div>

    </header>



    <div class="app-preview">

        <h1 class="ap-head">Categories of Blog You'll Explore ...</h1>

        <div id="hcg-slider-1" class="hcg-slider">
            <div class="hcg-slide-container">
                <div class="hcg-slider-body">
                    <a class="hcg-slides animated" style="display:block">
                        <span class="hcg-slide-number">1/5</span>
                        <img src="https://www.html-code-generator.com/images/slider/1.png" alt="image 1">
                    </a>
                </div>
            </div>
            <div class="hcg-slide-dot-control"></div>
        </div>


    </div>

    <div class="blogs-main" id="blogs">
        <h1 id="main-head">Explore Blogs</h1>
        <div class="category-select">
            <ul>
                <li class="cat-items"> <a href="/#blogs">All</a> </li>
                <li class="cat-items"> <a href="/nature#blogs">Nature</a> </li>
                <li class="cat-items"> <a href="/tech#blogs">Technology</a> </li>
                <li class="cat-items"> <a href="/sports#blogs">Sports</a> </li>
                <li class="cat-items"> <a href="/enter#blogs">Entertainment</a> </li>
                <li class="cat-items"> <a href="/food#blogs">Food</a> </li>
            </ul>
        </div>
        
        <div class="blogs-place">
            @yield('page-content')
        </div>

    </div>

    <footer>
        <p>©2022 Sanish</p>
    </footer>
    <script src="{{ asset('js/app.js') }}" async defer></script>
</body>
</html>
