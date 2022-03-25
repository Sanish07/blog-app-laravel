<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('icon.png') }}">
    <title>Manage Blogs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/manage.css')}}">
</head>

<body>
    <nav>
        <ul>
            <li> <a id="app-name" href="/"> Blogpedia </a> </li>
            <li class="nav-items"> <a href="/contact"> Contact </a></li>
            <li class="nav-items"> <a href="/projects"> My Other Projects </a></li>
        </ul>
    </nav>
    <hr class="div-hr">
    <main>

        <h1>Add Blog</h1>
        <form action="update" method="post">
            @csrf

            <label for="blogs">Category :</label>
            <select id="cat-group" class="text-inputs" name="blog-cat">
                <optgroup label="Choose Blog Category">
                    <option value="nature">Nature 🌳</option>
                    <option value="tech">Technology 📱</option>
                    <option value="sports">Sports 🏏</option>
                    <option value="ent">Entertainment 🎥</option>
                    <option value="food">Food 🍔</option>
                </optgroup>
            </select>

            <label>Add Title : </label>
            <input class="text-inputs" type="text" placeholder="Blog Title Here" name="blog-title" autocomplete="off" />
            <br>
            <span class="display-error">{{ $errors->first('blog-title') }}</span>
            <br><br><br>

            <label>Body : </label> <br><br>
            <textarea class="text-inputs" rows="10" cols="100" name="blog-body"> Write content here... </textarea>
            <br>
            <span class="display-error">{{$errors->first('blog-body')}}</span>
            <br><br>

            <button type="submit">Add This Blog!</button>

        </form>
    </main>



</body>

</html>
