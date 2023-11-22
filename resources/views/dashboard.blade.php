<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    {{ __("Bienvenido a ToolQuick tu herramienta para gestionar tus compras") }}
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 ml-2 mb-3">
                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Categorias</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Listado de todas las categorias existentes.</p>
                            <form action="{{ route('pdf_category') }}" method="GET" class="d-inline">
                                <button type="submit" class="bg-white hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                    Generar PDF
                                </button>
                            </form>

                        </div>
                    </div>

                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Productos</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Listado de todas los productos a la venta.</p>
                            <form action="{{ route('pdf_product') }}" method="GET" class="d-inline">
                                <button type="submit" class="bg-white hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                    Generar PDF</button>
                            </form>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Socios</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Listado de Asoscioado clientes y proveedores.</p>
                            <form action="{{ route('pdf_partners') }}" method="GET" class="d-inline">
                                <button type="submit" class="bg-white hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                    Generar PDF</button>
                            </form>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Transacciones</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Listado de todas las transacciones.</p>
                            <form action="{{ route('pdf_transaction') }}" method="GET" class="d-inline">
                                <button type="submit" class="bg-white hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                    Generar PDF</button>
                            </form>
                        </div>
                    </div>

                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow ">
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">Detalles</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 ">Listado detallado de las transacciones.</p>
                            <form action="{{ route('pdf_details') }}" method="GET" class="d-inline">
                                <button type="submit" class="bg-white hover:bg-orange-500 text-orange-700 font-semibold hover:text-white py-2 px-4 border border-orange-500 hover:border-transparent rounded">
                                    Generar PDF</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
