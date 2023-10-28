<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $partner = Partners::latest()->paginate(15);
        return view('index_partners', ['partner'=> $partner]);
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
            'PhoneNumber' => 'required',
            'Email' => 'required',
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
        $partner = Partners::all();
        $pdf = Pdf::loadView('report_partners', ['partner' => $partner]);
        return $pdf->stream('reporte_socios.pdf');
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
        $partners->delete();
        return redirect()->route('partners.index')->with('success', 'Eliminado exitosamente!');
    }
}
