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
            <th>Numero de Transaccion</th>
            <th>Numero del producto</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($details as $details )
            <tr>
                <th scope="row">{{$details->Transaction_id}}</th>
                <td>{{$details->Product_id}}</td>
                <td>{{$details->Quantity}}</td>
                <td>{{$details->UnitPrice}}</td>
                <td>{{$details->Subtotal}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
