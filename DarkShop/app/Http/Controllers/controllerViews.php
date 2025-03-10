<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerViews extends Controller
{
    function viewPrincipal(){
        return view('Index.ndexPrincipal');
    }

    function loginAdmin(){
        return view('Config.configAdmin');
    }
}
