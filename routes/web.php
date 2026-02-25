<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cat;
use App\Http\Controllers\CatController;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', function() {
    return Inertia::render('FelineIndex');
});

Route::post('/cats', [CatController::class, 'store']);

Route::get('cats/create', function() {
    return Inertia::render('CreateCat');
});

