<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorias') }}
        </h2>
        <div class="flex">
            <form action="{{route('category.create', $categorys)}}" method="GET" class="d-inline">
                <button type="submit" class="bg-white hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Crear</button>
            </form>

            <div class="flex">
                <form action="{{route('category.show', $categorys)}}" method="GET" class="d-inline">
                    <button type="submit" class="bg-white hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">Generar PDF</button>
                </form>
            </div>
        </div>
    </x-slot>

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
        <table  class="table-fixed border-collapse border border-slate-800 mx-auto">
            <thead class="text-m text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white-400">
            <tr>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Descripción</th>
                <th class="px-4 py-2">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categorys as $category)
                <tr>
                    <td class="border px-4 py-2">{{$category->CategoryName}}</td>
                    <td class="border px-4 py-2">{{$category->CategoryDescription}}</td>
                    <td class="border px-4 py-2">
                        <div class="flex">
                            <form action="{{ route('category.edit', $category) }}" method="GET" class="inline">
                                <button type="submit" class="bg-white text-red-500 border border-red-500 hover:border-red-700 font-bold py-2 px-4 rounded mr-4" >Editar</button>
                            </form>

                            <form action="{{ route('category.destroy', $category) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-white text-red-500 border border-red-500 hover:border-red-700 font-bold py-2 px-4 rounded mr-4" >Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
