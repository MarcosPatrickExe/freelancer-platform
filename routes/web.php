<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewUser;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/other-route', fn() => 'ola');

Route::get('/new-user', NewUser::class);