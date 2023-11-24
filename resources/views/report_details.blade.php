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
                <th>Numero de Transaccion</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($details as $detail)
                <tr>
                    <th scope="row">{{ $detail->Transaction_id }}</th>
                    <td>{{ $detail->Id_Product->ProductName }}</td>
                    <td>{{ $detail->Quantity }}</td>
                    <td>{{ $detail->UnitPrice }}</td>
                    <td>{{ $detail->Subtotal }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
