<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //Commonトップページ
    public function top()
    {
        return view('common.top');
    }
    //Commonログイン画面
    public function login()
    {
        return view('common.login');
    }
}
