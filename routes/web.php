<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;


Route::get('/',[productController::class, 'index'])->name('products');
