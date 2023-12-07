@extends('layouts.app')
<style>
    table {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card-body{
        background-color: #9BABB8;
    }

    .card-body a {
        text-decoration: none;
        color: #EEE3CB;
        position: relative;

    }

    .card-body a::after {
        content: '';
        height: 2px;
        width: 0;
        background: #E8DFCA;
        position: absolute;
        left: 0;
        bottom: -2px;
        transition: width 0.5s;
    }

    .card-body a:hover::after {
        width: 100%;
    }
</style>

@section('content')
    <h1 style="margin-left: 40px; margin-top:20px; color:#BBAB8C">Products</h1>

    <div style="margin-right: 20px; margin-left:20px;" class="row justify-content-center mt-4">
        @if ($products->count() > 0)
            @foreach ($products as $product)
                <div class="col-md-4" style="height: 300px; margin-bottom:200px;">
                    <div class="card" style="height:100%">
                        <img src="img/{{ $product->image }}" class="card-img-top" height="100%" />
                        <center>
                            <div class="card-body">
                                <a style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:30px;" href="product/{{ $product->id }}/detail">{{ $product->nama }}</a>
                                <p style="color: #EEE3CB">Price: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="card-footer">
                                <div  class="d-inline">
                                    <a style="color: #BBAB8C" href=""><ion-icon size="large" name="heart-outline"></ion-icon></a>
                                    <a style="color: #BBAB8C" href=""><ion-icon size="large" name="cart-outline"></ion-icon></a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="text-center">Items Not Found</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
