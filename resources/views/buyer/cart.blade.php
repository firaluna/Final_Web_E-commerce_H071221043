@extends('buyer.main')
@section('content')
    <h1>Keranjang Belanja</h1>

    @foreach ($cartItems as $cartItem)
        <div>
            <h3>{{ $cartItem->product->name }}</h3>
            <p>{{ $cartItem->product->description }}</p>
            <p>Harga: ${{ $cartItem->product->price }}</p>
        </div>
    @endforeach
@endsection
