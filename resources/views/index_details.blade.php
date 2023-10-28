@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark mt-3">Transacciones</h2>
            </div>
            <div>
                <form action="{{route('details.create', $details)}}" method="GET" class="d-inline">
                    <button type="submit" class="btn btn-primary">Añadir Detalles</button>
                </form>
            </div>
        </div>

        @if (Session::get('success'))
            <div class="alert alert-succes mt-2">
                <strong>{{Session::get('success')}}<br>
            </div>

        @endif

        <div class="col-12 mt-4">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>Numero de Transaccion</th>
                    <th>Numero del producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
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
                        <td>
                            <form action="{{route('details.edit', $details)}}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{route('details.destroy', $details)}}" method="POST" class="d-inline">
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
    <form action="{{route('details.show', $details)}}" method="GET" class="d-inline">
        <button type="submit" class="btn btn-outline-danger text-center mt-2">Reporte</button>
    </form>
@endsection
