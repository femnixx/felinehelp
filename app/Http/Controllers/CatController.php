<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Cat;

class CatController extends Controller
{
    public function index()
    { 
        $allCats = \App\Models\Cat::all();
        return Inertia::render('FelineIndex', [
            'cats' => $allCats
        ]);
    }

    public function store(Request $request) 
    {
       $validated = $request->validate([
        'name' => 'required|max:50',
        'breed' => 'required',
        ]);

        Cat::create($validated);
        return redirect('/cats');
    }
}
