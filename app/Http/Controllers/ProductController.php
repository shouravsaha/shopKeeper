<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = products::all();
        return view('index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required|max:32',
            'description' => 'required|string',
            'product_price' => 'required|numeric|min:0',
            'product_stock' => 'required|integer|min:0',
        ]);

        DB::table('products')
            ->insert([
                'name' => $request->product_name,
                'description' => $request->description,
                'price' => $request->product_price,
                'stock' => $request->product_stock,
            ]);

        return redirect()
            ->route('product.index')
            ->with('success', 'Product stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')->find($id);
        return view('edit_product', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update([
                'name' => $request->product_name,
                'description' => $request->description,
                'price' => $request->product_price,
                'stock' => $request->product_stock,

            ]);
            return redirect()->route('product.index')->with('success', 'Product updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function sale($id){
        return view('product_sale');
    }
}
