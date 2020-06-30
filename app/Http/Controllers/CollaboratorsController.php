<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollaboratorsController extends Controller
{
    public function list() {
        return view('collaborators.list');
    }
}
