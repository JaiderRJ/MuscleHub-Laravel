@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>📂 Detalle de Categoría</h4>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $categoria->id }}</p>
        <p><strong>Nombre:</strong> {{ $categoria->nombre }}</p>
        <p><strong>Estado:</strong> {{ ucfirst($categoria->estado) }}</p>

        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
