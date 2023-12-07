@extends('buyer.main')
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
<div style="margin-right: 20px; margin-left:20px;" class="row justify-content-center mt-4">
    @if ($produk->count() > 0)
        @foreach ($produk as $items)
            <div class="col-md-4" style="height: 300px; margin-bottom:200px;">
                <div class="card" style="height:100%">
                    <img src="img/{{ $items->product->image }}" class="card-img-top" height="100%" />
                    <center>
                        <div class="card-body">
                            <a style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:30px;" href="product/{{ $items->product->id }}/detail">{{ $items->product->nama }}</a>
                            <p style="color: #EEE3CB">Price: Rp {{ number_format($items->product->harga, 0, ',', '.') }}</p>
                        </div>
                        <div class="card-footer">
                            <div  class="d-inline">
                                <form action="">
                                    <button type="submit" style="color: #BBAB8C; border:none" href=""><ion-icon size="large" name="cart-outline"></ion-icon></button>
                                </form>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        @endforeach
        <div >
            <a style="margin-left: 85%; font-size: 18px; margin-bottom: 20px; color:#BBAB8C " href="/products" class="btn">
                More Products >>
            </a>
        </div>
        {{-- <div class="justify-content-center">
            <a style="margin-left: 44%; font-size: 15px; margin-bottom: 20px; border: 1px solid #9BABB8; box-shadow:  0 0 4px #9BABB8; text-decoration: none; transition: background-color 0.3s ease, color 0.3s ease;"  href="/products" class="btn">
                More Products</a>
        </div> --}}
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
