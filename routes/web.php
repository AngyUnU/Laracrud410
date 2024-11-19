<?php
use Illuminate\Support\Facades\Route;
use App\Models\Brand;


Route::get('/', function(){
    return view('index');
    })->name('index');
    
Route::resource('/products',App\Http\Controllers\ProductController::class);
Route::get('/products/{product}/delete',
[App\Http\Controllers\ProductController::class,'delete'])->name('products.delete');
Route::resource('/brands',App\Http\Controllers\BrandController::class);
Route::resource('/clients',App\Http\Controllers\ClientsController::class);
Route::resource('/Sales',App\Http\Controllers\SaleController::class);

/*
Route::get('/clients', function(){
    return view('clients_index');
    })->name('clients');
    

    
    Route::get('/sales', function () {
        return view('sales_index');
    }) ->name('sales');
    
  */      
        
    

