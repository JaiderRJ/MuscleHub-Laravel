<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CartController extends Controller
{
    // Mostrar carrito
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $items = [];
        $total = 0;

        foreach ($cart as $productId => $qty) {
            $product = Producto::find($productId);
            if ($product) {
                $items[] = ['producto' => $product, 'qty' => $qty];
                $total += $product->precio * $qty;
            }
        }

        return view('cart.index', compact('items', 'total'));
    }

    // Agregar al carrito (session)
    public function add(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        $cart = $request->session()->get('cart', []);
        $id = $request->input('producto_id');
        $qty = (int) $request->input('cantidad');

        if (isset($cart[$id])) {
            $cart[$id] += $qty;
        } else {
            $cart[$id] = $qty;
        }

        $request->session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Producto agregado al carrito.');
    }

    // Eliminar un producto del carrito
    public function remove(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
        ]);

        $cart = $request->session()->get('cart', []);
        $id = $request->input('producto_id');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }

    // Finalizar compra (simple) - limpia el carrito y muestra confirmación
    public function checkout(Request $request)
    {
        $request->session()->forget('cart');
        return view('cart.checkout');
    }
}
