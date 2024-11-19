<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        //
        $products = Product::get();
        return view('products.index', compact('products'));
    }

   
    public function create()
    {
        //
        //echo "create productos";
        $brands=Brand::pluck('id','brand');
        return view('Admin/products/create', compact('brands'));
    }

    public function store(Request $request)
    {
        //
       //  echo "Registro Realizado";
        //dd($request);
        //dd($request->all());
        Product::create($request->all());
        return to_route('products.index')-> with ('status', 'producto registrado');
    }

   
    public function show(Product $product)
    {
        //
     //   echo "Show productos";
        return view('Admin/products/show', compact('product'));
    }

   
    public function edit(Product $product)
    {
        $brands =Brand::pluck('id','brand');
        echo view('Admin/products/edit', compact('brands','product'));
       
    }

   
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return to_route('products.index')-> with ('status', 'producto Actualizado');
    }

   public function delete(Product $product)
   {
    echo view('Admin/products/delete', compact('product'));
   }

    public function destroy(Product $product)
    {
 
        $product->delete();
        return to_route('products.index')-> with('status', 'Producto Eliminado');
    }
}
