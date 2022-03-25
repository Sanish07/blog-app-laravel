<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewBlog extends Controller
{
    function displayBlog($id){
        $allBlogs = config('global.posts');
        $blogToDisplay = null;
        foreach ($allBlogs as $eachBlog) {
            if($id == $eachBlog['id']){
                $blogToDisplay = $eachBlog;
            }
        }
        return view('layout.blogbody',['blog' => $blogToDisplay]);
    }
}
