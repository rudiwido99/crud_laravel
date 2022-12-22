<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // $products = Product::withTrashed()->get();
        // return $products;
        return view('product.index', compact('products', $products));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Brand::all();
        return view('product.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|min:4|max:255',
            'brand_id' => 'required|max:255'
        ], [
            'brand_id.required' => 'Brand tidak boleh kosong'
        ]);

        // Insert Eloquent ORM
        // $product = new Product;
        // $product->nama = $request->nama;
        // $product->brand_id = $request->brand_id;
        // $product->harga = $request->harga;
        // $product->stok = $request->stok;
        // $product->info = $request->info;
        // $product->save();

        // Mass Assignment
        // $product = Product::create([
        //     'nama' => $request->nama,
        //     'brand_id' => $request->brand_id,
        //     'harga' => $request->harga,
        //     'stok' => $request->stok,
        //     'info' => $request->info
        // ]);

        Product::create($request->all());

        return redirect('product')->with('status', 'Data Produk berhasil ditambah!');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // $product = Product::find($id);

        // $product = Product::where('id', $id)->get();
        // $product = $product[0];
        // return $product;
        return view('product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $products = Brand::all();
        return view ('product.edit', compact('products', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $validated = $request->validate([
            'nama' => 'required|min:4|max:255',
            'brand_id' => 'required|max:255'
        ], [
            'brand_id.required' => 'Brand tidak boleh kosong'
        ]);
        // return $product;
        // Update Eloquent ORM
        // $product->nama = $request->nama;
        // $product->brand_id = $request->brand_id;
        // $product->harga = $request->harga;
        // $product->stok = $request->stok;
        // $product->info = $request->info;
        // $product->save();

        // Mass Assegment
        Product::where('id', $product->id)
        ->update([
            'nama' => $request->nama,
            'brand_id' => $request->brand_id,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'info' => $request->info
        ]);

        return redirect('product')->with('status', 'Data Produk berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // cara 1
        // Product::find($product->id);
        $product->forceDelete();

        // cara 2
        // Product::destroy($product->id);

        // cara 3
        // Product::where('id', $product->id)->delete();

        return redirect('product')->with('status', 'Data Produk berhasil dihapus!');
    }
}
