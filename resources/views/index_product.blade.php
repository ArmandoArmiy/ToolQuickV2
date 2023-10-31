@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark mt-3">Productos</h2>
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
        @if (Session::get('error'))
            <div class="alert alert-danger mt-2">
                <strong>{{Session::get('error')}}<br>
            </div>
        @endif

        <div class="col-12 mt-4">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio de venta</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $products )
                    <tr>
                        <th scope="row">{{$products->ProductName}}</th>
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
                </tbody>
            </table>
        </div>
    </div>
    <form action="{{route('product.show', $products)}}" method="GET" class="d-inline">
        <button type="submit" class="btn btn-outline-danger">Reporte</button>
    </form>
@endsection
