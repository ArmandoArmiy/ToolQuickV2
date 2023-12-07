<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Database\QueryException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $searchTerm = $request->input('q');

        if ($searchTerm) {
            $categorys = Category::search($searchTerm)->paginate(15);
        } else {
            $categorys = Category::latest()->paginate(15);
        }

        return view('index_category', ['categorys' => $categorys, 'searchTerm' => $searchTerm]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    private function store(Request $request)
    {
        $request->validate([
            'CategoryName' => 'required',
            'CategoryDescription' => 'required'
        ]);
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'Nueva Categoría creada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('edit_category', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate([
            'CategoryName' => 'required',
            'CategoryDescription' => 'required'
        ]);
        //dd($request->all());
        $category->update($request->all());
        return redirect()->route('category.index')->with('success', 'Categoría actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Category $category): RedirectResponse
    {
        try {
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Categoría eliminada exitosamente!');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()->with('error', 'No se puede borrar esta categoría. Está siendo referenciada por uno o más productos.');
            }
            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
    public function pdf(){
        $categorys = Category::all();
        $pdf = Pdf::loadView('report_category', compact('categorys'));
        return $pdf->stream('reporte_categorias.pdf');
    }

}

