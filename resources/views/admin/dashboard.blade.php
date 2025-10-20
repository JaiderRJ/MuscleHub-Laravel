@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="mb-2">
        <h5 class="text-muted">Bienvenido, <span class="fw-bold text-primary">{{ auth()->user()->name }}</span></h5>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Panel del Administrador</h2>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Categorías</h5>
                    <p class="card-text">Crea, edita o elimina categorías de productos.</p>
                    <a href="{{ route('categorias.index') }}" class="btn btn-primary">Ir a Categorías</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gestión de Productos</h5>
                    <p class="card-text">Administra los productos de tu tienda o inventario.</p>
                    <a href="{{ route('productos.index') }}" class="btn btn-success">Ir a Productos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
