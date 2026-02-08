<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thedudeguy\Rcon;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function sendMessage(Request $request){
        
    }
}
