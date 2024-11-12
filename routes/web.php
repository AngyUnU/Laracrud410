<?php
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('index');
    })->name('index');
    
Route::resource('/products',ProductController::class);
Route::resource('/brands',BrandController::class);
Route::get('/clients', function(){
    return view('clients_index');
    })->name('clients');
    

    
    Route::get('/sales', function () {
        return view('sales_index');
    }) ->name('sales');
    

    

