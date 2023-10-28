<?php

namespace App\Http\Controllers;

use App\Models\Transaction_Details;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class Transaction_DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $details = Transaction_Details::latest()->paginate(15);
        return view('index_details', ['details' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('create_details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'Transaction_id'  => 'required',
            'Product_id'  => 'required',
            'Quantity'  => 'required',
            'UnitPrice'  => 'required',
            'Subtotal'  => 'required'
        ]);
        Transaction_Details::create($request->all());
        return redirect()->route('details.index')->with('success', ' Transacción detallada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction_Details $transaction_Details)
    {
        $details = Transaction_Details::all();
        $pdf = Pdf::loadView('report_details', ['details' => $details]);
        return $pdf->stream('reporte_de_transacciones_detalladas.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction_Details $transaction_Details)
    {
        return view('edit_details', ['details' => $transaction_Details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction_Details $transaction_Details)
    {
        $request->validate([
            'Transaction_id'  => 'required',
            'Product_id'  => 'required',
            'Quantity'  => 'required',
            'UnitPrice'  => 'required',
            'Subtotal'  => 'required'
        ]);
        $transaction_Details->update($request->all());
        return redirect()->route('details.index')->with('success', 'Transacción actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction_Details $transaction_Details)
    {
        //dd($transaction_Details);
        $transaction_Details->delete();
        return redirect()->route('details.index')->with('success', 'Transacción Eliminada exitosamente!');
    }
}
