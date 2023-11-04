@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center"> Lista de Productos</h2>
            </div>
        </div>

        <div class="col-12 mt-4">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre del producto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio de venta</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Categoría</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $products)
                    <tr>
                        <th scope="row">{{$products->ProductName}}</th>
                        <td>{{$products->Description}}</td>
                        <td>{{$products->SellingPrice}}</td>
                        <td>{{$products->QuantityInInventory}}</td>
                        <td>{{$products->Category_id}}</td>
                    </tr>
                @endforeach
                <tbody>
            </table>
        </div>
    </div>
@endsection
