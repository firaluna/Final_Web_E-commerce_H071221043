@extends('buyer.main')
@section('content')
    <h1>Keranjang Belanja</h1>

    @foreach ($cartItems as $cartItem)
        <div>
            <h3>{{ $cartItem->products->name }}</h3>
            <p>{{ $cartItem->products->description }}</p>
            <p>Harga: ${{ $cartItem->products->price }}</p>
        </div>
    @endforeach
@endsection
