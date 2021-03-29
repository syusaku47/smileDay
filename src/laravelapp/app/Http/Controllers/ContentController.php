<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Base;

class ContentController extends Controller
{
    public function index()
    {
        $base = Base::find(1);
        $contents = $base->contents()->get();
        dd($contents);
        return view('admin.bases.contents.index', [
            'contents' => $contents
        ]);
    }
}
