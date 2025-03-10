<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerViews;

Route::get('/darkshophome', [controllerViews::class, 'viewPrincipal']);
Route::get('/loginadmin', [controllerViews::class, 'loginAdmin']);
