<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $searchTerm = $request->input('q');

        if ($searchTerm) {
            $products = Product::search($searchTerm)->paginate(15);
        } else {
            $products = Product::with('Id_category')->latest()->paginate(15);
        }

        return view('index_product', ['products' => $products, 'searchTerm' => $searchTerm]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = Category::all();
        return view('create_product',['category'=>$category]);
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
        $category = Category::all();
        return view('edit_product', ['product' => $product, 'category'=>$category]);
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

        try {
            $product->delete();
            return redirect()->route('product.index')->with('success', 'Producto Eliminado exitosamente!');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()->with('error', 'No se puede borrar esta categoría. Está siendo referenciada por uno o más productos.');
            }

            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
}
