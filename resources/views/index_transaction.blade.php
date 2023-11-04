<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Transacciones
        </h2>
        <div class="flex mt-2">
            <form action="{{ route('transaction.create', $transaction) }}" method="GET" class="d-inline">
                <button type="submit" class="bg-white hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Crear</button>
            </form>
            <form action="{{ route('transaction.show', $transaction) }}" method="GET" class="d-inline">
                <button type="submit" class="bg-white hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded ml-2">Generar PDF</button>
            </form>
        </div>
        <div class="mt-1.5 justify-center items-center bg-gray-50">
            <form action="{{ route('transaction.index') }}" method="GET">
                <input type="text" name="q" class="w-full border-2 border-gray-300 rounded-md p-2" placeholder="Buscar transacción...">
            </form>
        </div>
    </x-slot>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2">
            <strong>{{ Session::get('success') }}</strong>
        </div>
    @endif
    @if (Session::get('error'))
        <div class="alert alert-danger mt-2">
            <strong>{{ Session::get('error') }}</strong>
        </div>
    @endif

    <div class="col-12 mt-4">
        <table  class="table-fixed border-collapse border border-slate-800 mx-auto">
            <thead class="text-m text-white uppercase bg-gray-50 dark:bg-gray-700 dark:text-white-400">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Fecha</th>
                <th class="px-4 py-2">ID del partner</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Tipo de transacción</th>
                <th class="px-4 py-2">Acción</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($transaction as $transaction)
                <tr>
                    <td class="border px-4 py-2 fw-bold">{{ $transaction->id }}</td>
                    <td class="border px-4 py-2">{{ $transaction->TransactionDate }}</td>
                    <td class="border px-4 py-2">{{ $transaction->Partner_id }}</td>
                    <td class="border px-4 py-2">{{ $transaction->TotalAmount }}</td>
                    <td class="border px-4 py-2">{{ $transaction->TransactionType }}</td>
                    <td class="border px-4 py-2">
                        <div class="flex">
                            <form action="{{ route('transaction.edit', $transaction) }}" method="GET" class="inline">
                                <button type="submit" class="bg-white text-yellow-500 border border-yellow-500 hover:border-yellow-700 font-bold py-2 px-4 rounded mr-4" >Editar</button>
                            </form>

                            <form action="{{ route('transaction.destroy', $transaction) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-white text-red-500 border border-red-500 hover:border-red-700 font-bold py-2 px-4 rounded" >Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
