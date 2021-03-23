<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;
use App\Http\Requests\StoreBase;

class BaseController extends Controller
{

    public function create()
    {
        return view('bases.create');
    }

    public function store(StoreBase $request)
    {

        $base = new Base();
        $base->fill($request->all());
        $base->save();

        return redirect()->route('bases.create');
    }
}
