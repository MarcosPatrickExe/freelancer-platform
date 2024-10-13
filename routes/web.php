<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewUser;
use App\Http\Controllers\Freelancers;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/other-route', fn() => 'ola');

Route::get('/new-user', NewUser::class); // class with a single route

Route::get('/freelancer', [ Freelancers::class, 'getAllFreelancers' ]); // class with many routes