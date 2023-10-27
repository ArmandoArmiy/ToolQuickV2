@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-dark">Categorias</h2>
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

        <div class="col-12 mt-4">
            <table class="table table-bordered text-dark">
                <tr class="text-secondary">
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                </tr>
                @foreach ($categorys as $categorys )
                    <tr>
                        <td class="fw-bold">{{$categorys->CategoryName}}</td>
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

            </table>
            {{ $categorys->links }}
        </div>
    </div>
@endsection

