<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }

    public function detail($id)
    {
        $data = Product::find($id);

        return view('detail', ['product' => $data]);
    }

    public function addToCart(Request $req)
    {
        // cek dulu apakah udah login atau belum
        if ($req->session()->has('user')) {
            // create new data
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();

            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static public function cartItem()
    {
        $userId = session()->get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    public function cartList()
    {
        $userId = session()->get('user')['id'];
        // joining table
        $products = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->select('products.*', 'carts.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    public function removeItem($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function orderNow()
    {
        $userId = session()->get('user')['id'];
        // joining table
        $total = DB::table('carts')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    public function orderPlace(Request $req)
    {
        $userId = session()->get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        // untuk looping multiple data
        foreach ($allCart as $cart) {
            // masukan data ke tabel orders
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'PENDING';
            $order->payment_method = $req->payment;
            $order->payment_status = 'PENDING';
            $order->address = $req->address;
            $order->save();

            Cart::where('user_id', $userId)->delete();
        }
        return redirect('/');
    }

    public function myOrders()
    {
        $userId = session()->get('user')['id'];
        // joining table
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorder', ['orders' => $orders]);
    }
}
