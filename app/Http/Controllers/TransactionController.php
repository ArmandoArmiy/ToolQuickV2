<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Models\Transaction;
use Illuminate\Database\QueryException;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request):View
    {
        $searchTerm = $request->input('q');

        if ($searchTerm) {
            $transaction = Transaction::search($searchTerm)->paginate(15);
        } else {
            $transaction = Transaction::latest()->paginate(15);
        }

        return view('index_transaction', ['transaction' => $transaction, 'searchTerm' => $searchTerm]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        $partner = Partners::all();
        return view('create_transaction', ['partner'=>$partner]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'TransactionDate' => 'required',
            'Partner_id' => 'required',
            'TotalAmount' => 'required',
            'TransactionType' => 'required',
        ]);
        //dd($request->all());
        Transaction::create($request->all());
        return redirect()->route('transaction.index')->with('success', 'Nueva Transacción creada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction):View
    {
        $partner = Partners::all();
        return view('edit_transaction', ['transaction' => $transaction, 'partner'=>$partner]);
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
        try {
            $transaction->delete();
            return redirect()->route('transaction.index')->with('success', 'Transacción Eliminada exitosamente!');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()->with('error', 'No se puede borrar esta categoría. Está siendo referenciada por uno o más productos.');
            }

            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
    public function pdf()
    {
        $transaction = Transaction::all();
        $pdf = Pdf::loadView('report_transaction', compact('transaction'));
        return $pdf->stream('reporte_de_transacciones_generales.pdf');
    }
}
