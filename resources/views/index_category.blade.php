@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark mt-3">Categorias</h2>
            </div>
            <div>
                <form action="{{route('category.create', $categorys)}}" method="GET" class="d-inline">
                    <button type="submit" class="btn btn-primary">Crear</button>
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
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($categorys as $categorys )
                    <tr>
                        <th scope="row">{{$categorys->CategoryName}}</th>
                        <td>{{$categorys->CategoryDescription}}</td>
                        <td>
                            <form action="{{route('category.edit', $categorys)}}" method="GET" class="d-inline">
                                <button type="submit" class="btn btn-warning">Editar</button>
                            </form>

                            <form action="{{route('category.destroy', $categorys)}}" method="POST" class="d-inline">
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

    <form action="{{route('category.show', $categorys)}}" method="GET" class="d-inline">
        <button type="submit" class="btn btn-outline-danger text-center mt-2">Reporte</button>
    </form>
@endsection

