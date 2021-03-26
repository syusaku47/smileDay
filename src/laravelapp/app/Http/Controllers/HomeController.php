<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.homes.index');
    }
    public function user_index()
    {
        return view('homes.index');
    }
}
