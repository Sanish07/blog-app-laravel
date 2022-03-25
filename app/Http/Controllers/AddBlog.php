<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddBlog extends Controller
{
    function newBlog(Request $req){
        $req -> validate([
            'blog-title' => 'required|max:50|min:2',
            'blog-body' => 'required|max:1500|min:30'
        ]); //Set Rules for input fields

        $id = config('global.curId'); //Get active id for new blog post
        $postArr = config('global.posts'); //Get the posts array
        
        $newCategory = $req -> input('blog-cat');
        $newTitle = $req -> input('blog-title'); //Get the new blog title for input
        $newBody = $req -> input('blog-body'); //Get the new blog body from input

        $newArray = array('id' => $id,'cat' => $newCategory,'title' => $newTitle, 'body' => $newBody); //Make a new Array for new blog
        array_push($postArr,$newArray); //Push new array in all posts array 
        config(['global.posts' => $postArr]); //Set global posts with new updated array 
        // var_dump(config('global.posts'));
        foreach(config('global.posts') as $post){
            echo $post['id']."<br>"; 
            echo $post['cat']."<br>";
            echo $post['title']."<br>";
            echo $post['body']."<br>";
            echo "<br>";
        };
        
        $id++; //Update the active ID
        config(['global.curId' => $id]); //Set the active ID

        echo "<br>".config('global.curId');
        // return $req -> input();
    }
}
