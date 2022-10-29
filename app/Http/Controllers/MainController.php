<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //ホーム画面
    public function home()
    {
        return view('home.home');
    }
}
