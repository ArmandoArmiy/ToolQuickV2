@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark">Productos</h2>
            </div>
            <div>
                <form action="{{route('product.create', $products)}}" method="GET" class="d-inline">
                    <button type="submit" class="btn btn-primary">Agregar </button>
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
                    <th>Nombre del producto</th>
                    <th>Descripción</th>
                    <th>Precio de venta</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Acción</th>


                </tr>
                @foreach ($products as $products )
                    <tr>
                        <td class="fw-bold">{{$products->ProductName}}</td>
                        <td>{{$products->Description}}</td>
                        <td>{{$products->SellingPrice}}</td>
                        <td>{{$products->QuantityInInventory}}</td>
                        <td>{{$products->Category_id}}</td>
                        <td>
                            <form action="{{route('product.edit', $products)}}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{route('product.destroy', $products)}}" method="POST" class="d-inline">
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
