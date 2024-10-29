<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/indexProducts',[ProductController::class,'index'])->name('products');
Route::get('/indexProducts',[ProductController::class,'create'])->name('pcreate');
Route::get('/indexProducts',[ProductController::class,'store{$store}'])->name('pstore');
Route::get('/indexProducts',[ProductController::class,'edit'])->name('pedit');
Route::get('/indexProducts',[ProductController::class,'update{$store,$product}'])->name('pupdate');
Route::get('/indexProducts',[ProductController::class,'show'])->name('pshow');
Route::get('/indexProducts',[ProductController::class,'destroy{$product}'])->name('pdestroy');

route::get('/indexProducts',[App\Http\Controller\ProductController::class,'index'])
->name('products');

route::get('/createProducts',[App\Http\Controller\ProductController::class,'create'])
->name('pcreate');

route::get('/storeProducts/{store}',[App\Http\Controller\ProductController::class,'store'])
->name('pstore');

route::get('/editProducts{product}/edit',[App\Http\Controller\ProductController::class,'edit'])
->name('pedit');

route::get('/updateProducts/{product}',[App\Http\Controller\ProductController::class,'update'])
->name('pupdate');

route::get('/showProducts/{product}',[App\Http\Controller\ProductController::class,'show'])
->name('pshow');

route::get('/destroyProducts/{product}',[App\Http\Controller\ProductController::class,'destroy'])
->name('pdestroy');




/*
Router::get('clients', function(){
    return view('clients_index');
    })->name('clients');
    
    Route::get('/', function () { // " /  = slash " welcome.blade.php sitema de plantillas que ofrece laraavael para ahorrar timpo   
        return view('index');
    })->name ('index');
    
    Route::get('/products', function () {
        return view('products_index');
    }) ->name('products');
    
    Route::get('/clients', function () {
        return view('clients_index');
    }) ->name('clients');
    
    Route::get('/sales', function () {
        return view('sales_index');
    }) ->name('sales');
    
*/    
    
    

