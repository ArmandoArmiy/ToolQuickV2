<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Bienvenido a ToolQuick tú herramienta confiable para gestionar tus compras") }}
                </div>
                <form action="{{ route('category.show', 3) }}" method="GET" class="d-inline">
                    <button type="submit" class="bg-white hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded">
                        Generar PDF</button>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
