<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewUser extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request){
       return self::class; // or reutrn NewUser::class;
       // return view('welcome'); // retorna a view do welcome
    }
}
