@extends('layouts.base')

@section('content')
    <div class="container" style='max-width: 960px; margin: 0 auto;padding: 20px;'>
        <header>
            <div style=" background-color: #ff7c00; padding:20px; text-align:center; color:white;">
                <h1>Bienvenido a ToolQuick</h1>
                <p>Tu herramienta confiable para gestionar tus compras</p>
            </div>

        </header>
        <div class="container">
            <h2>Características Destacadas</h2>
            <p>ToolQuick ofrece una variedad de características increíbles:</p>
            <ul>
                <li>Control de Compras</li>
                <li>Control de proveedores</li>
                <li>Informes de venta</li>
                <li>Informes de compra</li>
                <li>Sugerido de compras</li>
            </ul>
        </div>
    </div>

    <div style="text-align: center; max-width: 960px; margin: 0 auto;padding: 20px;">
        <img src="/logo.jpg" alt="Logo">
    </div>
@endsection
