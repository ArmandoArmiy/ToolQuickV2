<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $transaction = Transaction::latest()->paginate(15);
        return view('index_transaction', ['transaction' => $transaction]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('create_transaction');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request->all());
        $request->validate([
        'TransactionDate' => 'required',
        'Partner_id' => 'required',
        'TotalAmount' => 'required',
        'TransactionType' => 'required'
    ]);
        Transaction::create($request->all());
        return redirect()->route('transaction.index')->with('success', 'Nueva Transacción creada exitosamente!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        $transactions = Transaction::all();
        $pdf = Pdf::loadView('report_transaction', ['transaction' => $transactions]);
        return $pdf->stream('reporte_de_transacciones_generales.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction):View
    {
        return view('edit_transaction', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //dd($request->all());
        $request->validate([
            'TransactionDate' => 'required',
            'Partner_id' => 'required',
            'TotalAmount' => 'required',
            'TransactionType' => 'required'
        ]);
        $transaction->update($request->all());
        return redirect()->route('transaction.index')->with('success', 'Transacción actualizada exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //dd($transaction);
        $transaction->delete();
        return redirect()->route('transaction.index')->with('success', 'Transacción Eliminada exitosamente!');
    }
}
