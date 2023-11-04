<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $categorys = Category::latest()->paginate(15);
        return view('index_category', ['categorys' => $categorys])
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_category');
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'CategoryName' => 'required',
            'CategoryDescription' => 'required'
        ]);
        //dd($request->all());
        Category::create($request->all());
        return redirect()->route('category.index')->with('success', 'Nueva Categoría creada exitosamente!');
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
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Categoría Eliminada exitosamente!');
    }
}

    public function destroy(Category $category)
    {
        //
    }
}
