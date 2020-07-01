<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainScreen() {
        return view('index');
    }
    
    public function reception() {
        return view('reception');
    }
}