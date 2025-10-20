@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>✏️ Editar Producto</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('productos.update', $producto) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Imagen (URL)</label>
                <input type="url" name="imagen_url" value="{{ $producto->imagen_url }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Categoría</label>
                <select name="categoria_id" class="form-select" required>
                    @foreach ($categorias as $cat)
                        <option value="{{ $cat->id }}" {{ $cat->id == $producto->categoria_id ? 'selected' : '' }}>
                            {{ $cat->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Estado</label>
                <select name="estado" class="form-select" required>
                    <option value="activo" {{ $producto->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                    <option value="inactivo" {{ $producto->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('productos.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
                <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Actualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
