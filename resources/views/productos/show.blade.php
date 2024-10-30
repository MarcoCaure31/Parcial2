@extends('layout.app')

@section('title', 'Detalles del Producto')

@section('content')
    <h2>Detalles del Producto</h2>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
    <p><strong>Cantidad:</strong> {{ $producto->cantidad }}</p>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
@endsection
