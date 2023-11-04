@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center"> Lista de transacciones generales</h2>
            </div>
        </div>
    </div>

    <table class="table">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>ID del partner</th>
            <th>Total</th>
            <th>Tipo de transacción</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transaction as $transaction)
            <tr>
                <td class="fw-bold">{{ $transaction->id }}</td>
                <td>{{ $transaction->TransactionDate }}</td>
                <td>{{ $transaction->Partner_id }}</td>
                <td>{{ $transaction->TotalAmount }}</td>
                <td>{{ $transaction->TransactionType }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
