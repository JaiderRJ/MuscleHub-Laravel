@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
    <h4>Productos - MuscleHub</h4>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo Producto
        </a>
    </div>

    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>
                            @if ($producto->imagen_url)
                                <img src="{{ $producto->imagen_url }}" alt="imagen" width="50" height="50" class="rounded">
                            @else
                                <img src="https://via.placeholder.com/50" alt="sin imagen" class="rounded">
                            @endif
                        </td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>${{ number_format($producto->precio, 2) }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>
                            <span class="badge bg-{{ $producto->estado == 'activo' ? 'success' : 'secondary' }}">
                                {{ ucfirst($producto->estado) }}
                            </span>
                        </td>
                        <td class="text-center">
                            <a href="{{ route('productos.show', $producto) }}" class="btn btn-info btn-sm" title="Ver"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm" title="Editar"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este producto?')" title="Eliminar">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
