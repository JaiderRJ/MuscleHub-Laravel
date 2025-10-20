@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>➕ Nuevo Producto</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Precio</label>
                <input type="number" step="0.01" name="precio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Imagen (URL)</label>
                <input type="url" name="imagen_url" class="form-control" placeholder="https://...">
            </div>

            <div class="mb-3">
                <label>Categoría</label>
                <select name="categoria_id" class="form-select" required>
                    <option value="">Seleccione...</option>
                    @foreach ($categorias as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Estado</label>
                <select name="estado" class="form-select" required>
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('productos.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Volver</a>
                <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
