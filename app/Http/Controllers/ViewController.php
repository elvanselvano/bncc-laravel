<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewHome()
    {
        return view('welcome');
    }

    public function articleCreation()
    {
        return view("home");
    }

    public function viewRegister()
    {
        return view("register");
    }

    public function viewLogin()
    {
        return view("login");
    }
}
