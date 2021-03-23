<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{

    public function create()
    {
        return view('bases.create');
    }
}
