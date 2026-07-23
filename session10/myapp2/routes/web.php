<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/form',function()
{
    return view('hello');
});

Route::get('/students',[CategoryController::class , 'listFun']);
Route::get('/students/filter',[CategoryController::class , 'filterFun']);
