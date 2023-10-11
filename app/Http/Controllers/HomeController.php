<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class HomeController extends Controller
{
    Public function dashboard (){
        return view('dashboard');
    }
}
