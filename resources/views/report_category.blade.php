@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center"> Lista de Categorias</h2>
            </div>
        </div>

    <div class="col-12 mt-4">
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categorys as $categorys )
                <tr>
                    <th scope="row">{{$categorys->CategoryName}}</th>
                    <td>{{$categorys->CategoryDescription}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
