@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h3>Bienvenido, {{ auth()->user()->name }}</h3>
            <p>Rol: <strong>{{ auth()->user()->rol }}</strong></p>

            <div class="mt-3">
                <a href="{{ route('store') }}" class="btn btn-primary">Ir a la Tienda</a>
                <a href="{{ route('profile.edit') }}" class="btn btn-secondary ms-2">Mi perfil</a>
            </div>
        </div>
    </div>
</div>
@endsection
