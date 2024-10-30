@extends('layout.app')

@section('title', 'Lista de Productos')

@section('content')
    <h2>Lista de Productos</h2>
    <a href="{{ route('productos.create') }}">Crear nuevo producto</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
