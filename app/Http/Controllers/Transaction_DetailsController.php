<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\Transaction_Details;
use Illuminate\Database\QueryException;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class Transaction_DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $searchTerm = $request->input('q');

        if ($searchTerm) {
            $details = Transaction_Details::search($searchTerm)->paginate(15);
        } else {
            $details = Transaction_Details::latest()->paginate(15);
        }

        return view('index_details', ['details' => $details, 'searchTerm' => $searchTerm]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $product = Product::all();
        $tran = Transaction::all();
        return view('create_details',['product'=>$product, 'tran'=>$tran]);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction_Details $transaction_Details)
    {
        $details = Transaction_Details::find($transaction_Details);
        $product = Product::all();
        $tran = Transaction::all();
        return view('edit_details', ['detail' => $details, 'product' => $product, 'tran' => $tran]);
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
    public function destroy($transaction_Details): RedirectResponse
    {
        $registro = Transaction_Details::find($transaction_Details);
        try {
            $registro->delete();
            return redirect()->route('details.index')->with('success', 'Transacción Eliminada exitosamente!');
        } catch (QueryException $e) {
            if ($e->getCode() === '23000') {
                return redirect()->back()->with('error', 'No se puede borrar esta categoría. Está siendo referenciada por uno o más productos.');
            }

            return redirect()->back()->with('error', 'Ocurrió un error: ' . $e->getMessage());
        }
    }
    public function pdf()
    {
        $details = Transaction_Details::all();
        $pdf = Pdf::loadView('report_details', compact('details'));
        return $pdf->stream('reporte_de_transacciones_detalladas.pdf');
    }
}
