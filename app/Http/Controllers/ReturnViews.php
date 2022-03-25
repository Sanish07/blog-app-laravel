<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReturnViews extends Controller
{
    function ackRequest($route=null){

        switch ($route) {
            case null:
                return view('home');
                break;
            
            case 'contact':
                return view('contact');
                break;

            case 'projects':
                return view('projects');
                break;

            case 'nature':
                return view('nature');
                break;
            
            case 'tech':
                return view('tech');
                break;

            case 'sports':
                return view('sports');
                break; 

            case 'enter':
                return view('enter');
                break; 

            case 'food':
                return view('food');
                break; 
            
            case 'manage':
                return view('addBlog');
                break; 

            default:
                return view('welcome');
                break;
        }


    }
}
