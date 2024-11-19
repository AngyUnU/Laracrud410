<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::get();
        return view('brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('Admin/brand/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Brand::create($request->all());
        return to_route('products.index')-> with ('status', 'Marca registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        return view('Admin/brand/show', compact('brands'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        $brand->update($request->all());
        return to_route('brand.index')-> with ('status', 'Marca Actualizada');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        echo view('Admin/brand/delete', compact('brand'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return to_route('brand.index')-> with('status', 'Marca Eliminada');
    }
}
