<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    function home(){
        return view("blade.home_view");
    }
}
