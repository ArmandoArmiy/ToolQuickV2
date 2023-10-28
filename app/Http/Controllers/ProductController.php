<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $products = Product::latest()->paginate(15);
        return view('index_product', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
            'ProductName' => 'required',
            'Description' => 'required',
            'SellingPrice' => 'required',
            'QuantityInInventory' => 'required',
            'Category_id' => 'required']);
        Product::create($request->all());
        return redirect()->route('product.index')->with('success', 'Producto agregado exitosamente!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $products = Product::all();
        $pdf = Pdf::loadView('report_product', ['products' => $products]);
        return $pdf->stream('reporte_de_productos.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View
    {
        return view('edit_product', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
            'ProductName' => 'required',
            'Description' => 'required',
            'SellingPrice' => 'required',
            'QuantityInInventory' => 'required',
            'Category_id' => 'required']);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success', 'Producto actualizado exitosamente!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Producto Eliminado exitosamente!');
    }
}
