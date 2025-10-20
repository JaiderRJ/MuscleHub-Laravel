@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body text-center">
            <h3>Gracias por tu compra</h3>
            <p>Hemos recibido tu pedido. Te contactaremos cuando esté listo.</p>
            <a href="{{ route('store') }}" class="btn btn-primary">Seguir comprando</a>
        </div>
    </div>
</div>
@endsection
