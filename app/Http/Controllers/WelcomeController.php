<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function showHomePage(){
        return view('welcome');
    }
}
