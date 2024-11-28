<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\products\StoreRequest;

class ProductController extends Controller
{
   
    public function index()
    {
        //
      //  $products = Product::get();
      $products = Product::paginate(5);
        return view('products.index', compact('products'));
    }

   
    public function create()
    {
        //
        //echo "create productos";
        
        $brands=Brand::pluck('id','brand');
        return view('products.create', compact('brands'));
        
    }

    public function store(StoreRequest $request)
    {
  
        $data = $request->all();

        if(isset($data["imagen"])){
        // cambiar el nombre del archivo a cargar
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
         // cambiar la carpeta publica 
         $request->imagen->move(public_path("imagen/products"), $filename);
        }
        Product::create($data);
        return to_route('products.index')-> with ('status', 'producto registrado');
    }

   
    public function show(Product $product)
    {
        //
     //   echo "Show productos";
        return view('products.show', compact('product'));
    }

   
    public function edit(Product $product)
    {
        $brands =Brand::pluck('id','brand');
        echo view('products.edit', compact('brands','product'));
       
    }

   
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        if(isset($data["imagen"])){
        // cambiar el nombre del archivo a cargar
            $data["imagen"] = $filename = time(). ".".$data["imagen"]->extension();
         // cambiar la carpeta publica 
         $request->imagen->move(public_path("imagen/products"), $filename);
        }
        $product->update($data);
        return to_route('products.index')-> with ('status', 'producto Actualizado'); 

    }
  
   public function delete(Product $product)
   {
    echo view('products.delete', compact('product'));
   }

    public function destroy(Product $product)
    {
 
        $product->delete();
        return to_route('products.index')-> with('status', 'Producto Eliminado');
    }
}
