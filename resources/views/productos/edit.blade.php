@extends('layout.app')

@section('title', 'Editar Producto')

@section('content')
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>
        <div>
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
@endsection
