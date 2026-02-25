<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cat;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', function ($name) { 
    return view('greet', [
        'name' => $name,
        'timeTo' => date('H:i')
        ]);
});

Route::get('/cats', function () { 
    $allCats = Cat::all();

    return view('feline_list', ['cats' => $allCats]);
});

Route::get('/cats/create', function () { 
    return view('create_cat');
});

Route::post('/cats', function (Request $request) { 
    Cat::create([
        'name' => $request->name,
        'breed' => $request->breed,
    ]);
    return redirect('/cats');
});

