<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;


Route::get('/', [BrandController::class, 'welcome']);
