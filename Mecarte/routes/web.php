<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Symfony\Component\HttpFoundation\Request;


Route::resource('/admin', AdminController::class);

