<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('userInfos');
    }

    public function store(Request $request)
    {
        return 'Votre nom est '.$request->input('nom');
    }
}
