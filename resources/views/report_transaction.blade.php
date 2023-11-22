@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center">Lista de transacciones generales</h2>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Asociado</th>
                <th>Total</th>
                <th>Tipo de transacción</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($transaction as $transaction)
                <tr>
                    <th  scope="row">{{ $transaction->id }}</th>
                    <td>{{ $transaction->TransactionDate }}</td>
                    <td>{{ $transaction->Id_Partner->PartnerName }}</td>
                    <td>{{ $transaction->TotalAmount }}</td>
                    <td>{{ $transaction->TransactionType }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
