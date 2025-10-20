@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Productos</h3>

                <form action="{{ route('store') }}" method="GET" class="d-flex align-items-center">
                    <label class="me-2 text-muted">Filtrar por:</label>
                    <select name="categoria" class="form-select me-2" onchange="this.form.submit()">
                        <option value="">Todas</option>
                        @foreach($categorias as $cat)
                            <option value="{{ $cat->id }}" {{ (int)$categoriaId === $cat->id ? 'selected' : '' }}>{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </form>
            </div>

            <div class="row">
                @foreach($productos as $producto)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if($producto->imagen_url)
                                <img src="{{ $producto->imagen_url }}" class="card-img-top" style="height:180px; object-fit:cover;" alt="{{ $producto->nombre }}">
                            @endif
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                <p class="card-text text-muted">{{ $producto->categoria->nombre ?? 'Sin categoría' }}</p>
                                <p class="card-text fw-bold mt-auto">${{ number_format($producto->precio,2) }}</p>

                                <!-- Formulario para agregar al carrito -->
                                <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    <input type="hidden" name="cantidad" value="1">
                                    <button type="submit" class="btn btn-primary w-100">Agregar al carrito</button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
