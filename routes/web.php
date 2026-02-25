<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Cat;
use App\Http\Controller\CatController;
use Intertia\Intertia;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', [CatController::class, 'index']);

Route::post('/cats', [CatController::class, 'store']);

Route::get('/cats/create', function() { 
    return view('create_cat');
});

