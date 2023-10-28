@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark">Transacciones</h2>
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
            <table class="table table-bordered text-dark">
                <tr class="text-secondary">
                    <th>Numero de Transaccion</th>
                    <th>Numero del producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($details as $details )
                    <tr>
                        <td class="fw-bold">{{$details->Transaction_id}}</td>
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

            </table>
        </div>
    </div>
@endsection
