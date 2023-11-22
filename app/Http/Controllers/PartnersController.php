<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $searchTerm = $request->input('q');

        if ($searchTerm) {
            $partner = Partners::search($searchTerm)->paginate(15);
        } else {
            $partner = Partners::latest()->paginate(15);
        }

        return view('index_partners', ['partner' => $partner, 'searchTerm' => $searchTerm]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('create_partners');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'PartnerName' => 'required',
            'Address' => 'required',
            'PhoneNumber' => ['required','digits:10'],
            'Email' => ['required', 'email'],
            'PartnerType' => 'required'
        ]);
        //dd($request->all());
        Partners::create($request->all());
        return redirect()->route('partners.index')->with('success', 'Nuevo Parner creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partners $partners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partners $partners): View
    {
        return view('edit_partners', ['partners' => $partners]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partners $partners): RedirectResponse
    {
        $request->validate([
            'PartnerName' => 'required',
            'Address' => 'required',
            'PhoneNumber' => 'required',
            'Email' => 'required',
            'PartnerType' => 'required'
        ]);
        //dd($request->all());
        $partners->update($request->all());
        return redirect()->route('partners.index')->with('success', 'Parner actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partners): RedirectResponse
    {
        try {
            $partners->delete();
            return redirect()->route('partners.index')->with('success', 'Eliminado exitosamente!');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()->with('error', 'No se puede borrar esta categoría. Está siendo referenciada por uno o más productos.');
            }

            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
    public function pdf()
    {
        $partner = Partners::all();
        $pdf = Pdf::loadView('report_partners', compact('partner'));
        return $pdf->stream('reporte_socios.pdf');
    }
}
