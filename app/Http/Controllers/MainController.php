<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //ホーム画面
    public function index()
    {
        return view('index');
    }

    //恐竜詳細ページ
    public function dinosaur()
    {
        return view('dinosaur');
    }
}
