@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Detalle de Producto - MuscleHub</h4>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $producto->id }}</p>
        <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
        <p><strong>Categoría:</strong> {{ $producto->categoria->nombre ?? '—' }}</p>
        <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
        <p><strong>Stock:</strong> {{ $producto->stock }}</p>
        <p><strong>Estado:</strong> {{ ucfirst($producto->estado) }}</p>

        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
