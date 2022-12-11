<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavPageController extends Controller
{
    public function register(){
        return view('Register-Dani');
    }

    public function login()
    {
        return view('Login-Dani');
    }

    public function profile()
    {
        return view('Profile-Dani');
    }

    public function myCar()
    {
        return view('ListCar-Dani');
    }

    public function addCar()
    {
        return view('Add-Dani');
    }
}
