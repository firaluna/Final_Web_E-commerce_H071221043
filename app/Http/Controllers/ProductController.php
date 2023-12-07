<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Like;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dashboard.index', ['products'=> Product::inRandomOrder()->get()]);
    }

    public function products()
    {
        return view('buyer.products', ['products'=> Product::inRandomOrder()->get()]);
    }

    public function Listproduct()
    {
        $products = Product::inRandomOrder()->get();
        return view('puser.Listproduct')->with(["products" => $products]);
    }

    public function Listproduct1()
    {
        $products = Product::inRandomOrder()->get();
        return view('puser.welcome')->with(["products" => $products]);
    }

    public function produk()
    {
        return view('user.produk', ['products'=> Product::inRandomOrder()->get()]);
    }

    public function rproduk()
    {
        $produk = product::all();
        return view('buyer.home', compact('produk') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:10000'
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('img'), $imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->jenis = $request->jenis;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;

        $product->save();

        return redirect()->route('index')->withSuccess('Product Telah Di tambahkan!!!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::where('id', $id)->first();
        return view('user.show', ['product' => $product]);
    }

    public function detail($id)
    {
        $product = Product::where('id', $id)->first();
        return view('buyer.detail', ['product' => $product]);
    }

    public function pdetail($id)
    {
        $product = Product::where('id', $id)->first();
        return view('puser.pdetail', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('user.dashboard.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //validasi data
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jenis' => 'nullable',
            'deskripsi' => 'required',
            'stok' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:10000'
        ]);

        $product = Product::where('id', $id)->first();

        if(isset($request->image)){
            //upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img'), $imageName);
            $product->image = $imageName;
        }

        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->jenis = $request->jenis;
        $product->deskripsi = $request->deskripsi;
        $product->stok = $request->stok;
        $product->save();

        return redirect()->route('index')->withSuccess('Product Berhasil Di Ubah!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product =Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Produk Berhasil di Hapus!!!');
    }

    public function jenis(Request $request)
    {
        $jenis = $request->input('jenis'); // Ambil nilai yang diinputkan pengguna

        $products = Product::where('jenis', $jenis)->get();

        return view('user.jenis', ['products' => $products]);
    }

    public function search(Request $request)
    {
        $search = $request->input('jenis'); // Ambil nilai yang diinputkan pengguna

        $products = Product::where('jenis', $search)->get();

        return view('buyer.search', ['products' => $products]);
    }

    public function pencarian(Request $request)
    {
        $search = $request->input('jenis'); // Ambil nilai yang diinputkan pengguna

        $products = Product::where('jenis', $search)->get();

        return view('puser.pencarian', ['products' => $products]);
    }

    public function admindashboar(){
        return view ('admin.AdminDashboard');
    }

    public function sellerdashboard(){
        return view ('user.dashboard.sellerdashboard');
    }

    public function buyerdashboard(){
        return view ('buyer.buyerdashboard');
    }

    public function like() {
        return view ('buyer.like', [
            'produk' => Like::all()->where('user_id', Auth::user()->id)
        ]);
    }

    public function cart(Request $request)
    {
    $productId = $request->input('product_id');

    // Logika untuk menambahkan produk ke keranjang (sesuai kebutuhan)

    $cartItem = new Cart([

        'product_id' => $productId,
        // tambahkan kolom lain yang diperlukan
    ]);

    $cartItem->save();

    return response()->json(['message' => 'Produk berhasil ditambahkan ke keranjang.']);
}
}


