<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Method untuk menampilkan semua produk
    public function index()
    {
        // Mengambil semua produk dari database
        $products = Product::all();
        // Menampilkan view 'products' dan menyertakan data produk
        return view('products', compact('products'));
    }

    // Method untuk menampilkan halaman keranjang belanja
    public function productCart()
    {
        // Menampilkan view 'cart'
        return view('cart');
    }

    // Method untuk menambahkan produk ke keranjang belanja
    public function addProducttoCart($id)
    {
        // Mengambil produk berdasarkan ID
        $product = Product::findOrFail($id);
        // Mendapatkan keranjang belanja dari session
        $cart = session()->get('cart', []);
        // Memeriksa apakah produk sudah ada dalam keranjang belanja
        if(isset($cart[$id])) {
            // Jika sudah ada, tambahkan jumlahnya
            $cart[$id]['quantity']++;
        } else {
            // Jika belum ada, tambahkan produk baru ke dalam keranjang belanja
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "description" => $product->description
            ];
        }
        // Menyimpan keranjang belanja kembali ke session
        session()->put('cart', $cart);
        // Mengalihkan pengguna kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    // Method untuk memperbarui keranjang belanja
    public function updateCart(Request $request)
    {
        // Memeriksa apakah ada ID produk dan jumlah produk yang diperbarui
        if($request->id && $request->quantity){
            // Mendapatkan keranjang belanja dari session
            $cart = session()->get('cart');
            // Memperbarui jumlah produk dalam keranjang belanja
            $cart[$request->id]["quantity"] = $request->quantity;
            // Menyimpan kembali keranjang belanja yang diperbarui ke dalam session
            session()->put('cart', $cart);
            // Menampilkan pesan sukses
            session()->flash('success', 'Product added to cart.');
        }
    }

    // Method untuk menghapus produk dari keranjang belanja
    public function deleteProduct(Request $request)
    {
        // Memeriksa apakah ada ID produk yang akan dihapus
        if($request->id) {
            // Mendapatkan keranjang belanja dari session
            $cart = session()->get('cart');
            // Memeriksa apakah produk ada dalam keranjang belanja
            if(isset($cart[$request->id])) {
                // Jika ada, hapus produk tersebut dari keranjang belanja
                unset($cart[$request->id]);
                // Menyimpan kembali keranjang belanja yang diperbarui ke dalam session
                session()->put('cart', $cart);
            }
            // Menampilkan pesan sukses
            session()->flash('success', 'Product successfully deleted.');
        }
    }
}

