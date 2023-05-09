<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommonController; 

//commonのトップページ

Route::get('/', [CommonController::class, 'top'])
    ->name('common.top');

//commonのログイン画面

Route::get('/login', [CommonController::class, 'login'])
    ->name('common.login');
