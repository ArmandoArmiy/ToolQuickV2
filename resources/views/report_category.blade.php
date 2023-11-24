@extends('layouts.report')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-center "> Lista de Categorias</h2>
            </div>
        </div>

        <div class="col-12 mt-4">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Descripción</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <th scope="row">{{$category->CategoryName}}</th>
                        <td>{{$category->CategoryDescription}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

