@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark mt-3">Transacciones</h2>
            </div>
            <div>
                <form action="{{ route('transaction.create', $transaction) }}" method="GET" class="d-inline">
                    <button type="submit" class="btn btn-primary">Realizar Transacción</button>
                </form>
            </div>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-success mt-2">
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::get('error'))
            <div class="alert alert-danger mt-2">
                <strong>{{Session::get('error')}}<br>
            </div>
        @endif

        <div class="col-12 mt-4">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>ID del partner</th>
                    <th>Total</th>
                    <th>Tipo de transacción</th>
                    <th>Acción</th>
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
                        <td>
                            <form action="{{ route('transaction.edit', $transaction) }}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{ route('transaction.destroy', $transaction) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route('transaction.show', $transaction)}}" method="GET" class="d-inline">
        <button type="submit" class="btn btn-outline-danger text-center mt-2">Reporte</button>
    </form>
@endsection
