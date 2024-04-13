
@extends('layouts.app')

@section('title','Editar rol')

@push('css')

@endpush

@section('content')
<head>
    <title>Venta {{ $venta->numero_comprobante }}</title>
    <style>
        /* Estilos básicos para el PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Comprobante de Venta</h1>
    <h2>Número de Comprobante: {{ $venta->numero_comprobante }}</h2>

    <!-- Información del cliente -->
    <h3>Información del Cliente</h3>
    <p>Nombre: {{ $venta->cliente->persona->nombre }}</p>
    <p>Documento: {{ $venta->cliente->persona->documento_identidad }}</p>
    <p>Razón Social: {{ $venta->cliente->persona->razon_social }}</p>

    <!-- Información de la venta -->
    <h3>Información de la Venta</h3>
    <p>Fecha y Hora: {{ \Carbon\Carbon::parse($venta->fecha_hora)->format('d-m-Y H:i') }}</p>
    <p>Vendedor: {{ $venta->user->name }}</p>

    <!-- Detalle de la venta -->
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Descuento</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($venta->productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->pivot->cantidad }}</td>
                    <td>{{ $producto->pivot->precio_venta }}</td>
                    <td>{{ $producto->pivot->descuento }}</td>
                    <td>{{ $producto->pivot->cantidad * $producto->pivot->precio_venta - $producto->pivot->descuento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Totales -->
    <h3>Totales</h3>
    <p>Subtotal: {{ $venta->subtotal }}</p>
    <p>Impuesto (IGV): {{ $venta->impuesto }}</p>
    <p>Total: {{ $venta->total }}</p>
</body>
@endsection
