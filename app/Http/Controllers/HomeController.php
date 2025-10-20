<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Mostrar la tienda directamente al acceder a /home
        return $this->store($request);
    }

    // Tienda pública: lista productos y permite filtrar por categoría
    public function store(Request $request)
    {
        $categoriaId = $request->query('categoria');
        $categorias = Categoria::where('estado', 'activo')->get();

        $query = Producto::with('categoria')->where('estado', 'activo');
        if ($categoriaId) {
            $query->where('categoria_id', $categoriaId);
        }

        $productos = $query->get();

        return view('client.home', compact('productos', 'categorias', 'categoriaId'));
    }
}
