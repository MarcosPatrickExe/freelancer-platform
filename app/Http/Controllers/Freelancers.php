<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Freelancers extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function getAllFreelancers(Request $request) {
        return "[ Felipe, Davi, Luciana, Fernanda, Edcleus, Fulano ]";
    }
    
    
    public function getFirstFreelancer(Request $request) {
        return 'freelancer Fulano, age: 27';
    }
}
