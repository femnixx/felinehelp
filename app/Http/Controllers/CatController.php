<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function index()
    { 
        $allCats = Cat::all();
        return view('feline_list', ['cats' => $allCats]);
    }

    public function store(Request $request) 
    {
        Cat::create([
            'name' => $request->name,
            'breed' => $request->breed,
        ]);
        return redirect('/cats');
    }
}
