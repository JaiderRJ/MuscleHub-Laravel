@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Carrito de compras</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($items) === 0)
        <div class="alert alert-info">Tu carrito está vacío.</div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $it)
                    <tr>
                        <td>{{ $it['producto']->nombre }}</td>
                        <td>{{ $it['qty'] }}</td>
                        <td>${{ number_format($it['producto']->precio,2) }}</td>
                        <td>${{ number_format($it['producto']->precio * $it['qty'],2) }}</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="producto_id" value="{{ $it['producto']->id }}">
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-end">
            <h5 class="me-3">Total: ${{ number_format($total,2) }}</h5>
            <div>
                <a href="{{ route('store') }}" class="btn btn-secondary me-2">Volver a la tienda</a>

                <form action="{{ route('cart.checkout') }}" method="POST" style="display:inline;">
                    @csrf
                    <button class="btn btn-success">Finalizar compra</button>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection
