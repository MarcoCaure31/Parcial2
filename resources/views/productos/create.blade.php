@extends('layout.app')

@section('title', 'Crear Producto')

@section('content')
    <h2>Crear Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" required>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
@endsection
