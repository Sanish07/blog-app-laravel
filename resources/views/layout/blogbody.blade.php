<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>{{ $blog['title'] }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/blogpage.css')}}">
        @if($blog['cat'] == 'tech')
            <style>
               header{
                  background-image: url("{{ asset('cover-tech.jpg') }}");
                  background-position-y : -100px;
                }

                #app-name{
                    color: #00B4D8;
                }

                .nav-items>a{
                    color : #90E0EF;
                }

                .nav-items>a:hover{
                    color : #FDEFF4;
                }

                hr{
                    border-bottom: 5px dotted #11999E;
                }
            </style>
        @endif

        @if($blog['cat'] == 'food')
        <style>
               header{
                  background-image: url("{{ asset('cover-food.jpg') }}");
                  background-position-y : -3px;
                }

                #app-name{
                    color: #FFB72B;
                }

                .nav-items>a{
                    color : #EBE645;
                    font-weight : bold;
                }

                .nav-items>a:hover{
                    color : #FDEFF4;
                }

                hr{
                    border-bottom: 5px dotted #FAEE1C;
                }
        </style>
        @endif    

        @if($blog['cat'] == 'ent')
        <style>
               header{
                  background-image: url("{{ asset('cover-enter.jpg') }}");
                  background-position-y : -150px;
                }

                #app-name{
                    color: #FAEE1C;
                }

                .nav-items>a{
                    color : #F9ED69;
                }

                .nav-items>a:hover{
                    color : #F6F7D7;
                }

                hr{
                    border-bottom: 5px dotted #FF5722;
                }
        </style>
        @endif   

        @if($blog['cat'] == 'nature')
        <style>
               header{
                  background-image: url("{{ asset('cover-nat.jpg') }}");
                  background-position-y : -330px;
                }

                #app-name{
                    color: #9AFD11;
                }

                .nav-items>a{
                    color : #D2E603;
                }

                .nav-items>a:hover{
                    color : #F5A31A;
                }

                hr{
                    border-bottom: 5px dotted #81B214;
                }

        </style>
        @endif    

        @if($blog['cat'] == 'sports')
        <style>
               header{
                  background-image: url("{{ asset('cover-sports.jpg') }}");
                  background-position-y : -300px;
                }

                #app-name{
                    color: #42C2FF;
                }

                .nav-items>a{
                    color : #84DFFF;
                }

                .nav-items>a:hover{
                    color : #FFFDA2;
                }

                hr{
                    border-bottom: 5px dotted #393E46;
                }
        </style>
        @endif
        
    
</head>

<body>

    <header>
        <nav>
            <ul>
                <li> <a id="app-name" href="/"> Blogpedia </a> </li>
                <li class="nav-items"> <a href="/manage"> Manage </a></li>
                <li class="nav-items"> <a href="/contact"> Contact </a></li>
                <li class="nav-items"> <a href="/projects"> My Other Projects </a></li>
            </ul>
        </nav>
    </header>

    <img class="blog-img" src="{{$blog['img-data']}}" alt="blog-img" />

    <div class="content">
        @if($blog['cat'] == 'food')
        <span class="blog-cat tag tag-yellow"> Food </span>
        @endif

        @if($blog['cat'] == 'tech')
        <span class="blog-cat tag tag-blue"> Technology </span>
        @endif

        @if($blog['cat'] == 'ent')
        <span class="blog-cat tag tag-red"> Entertainment </span>
        @endif

        @if($blog['cat'] == 'nature')
        <span class="blog-cat tag tag-green"> Nature </span>
        @endif

        @if($blog['cat'] == 'sports')
        <span class="blog-cat tag tag-brown"> Sports </span>
        @endif

        <h1 class="blog-head"> {{ $blog['title'] }} </h1>

        <hr>

        <div class="blog-body">
            {{ $blog['body'] }}
        </div>

    </div>
</body>

</html>
