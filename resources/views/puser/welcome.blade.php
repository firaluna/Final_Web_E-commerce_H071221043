@extends('layouts.app')
@section('content')
<div>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/br.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/dr.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/k.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/lr.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
    <p style="color:#7895B2 ;margin-left: 10%; margin-right:10%; margin:7%; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif" class=" text-center fs-5 ">
    Selamat datang di MoonLit! Temukan kenyamanan dan keindahan dalam setiap detail furnitur kami. <br>
    Jelajahi koleksi eksklusif kami yang dirancang untuk memenuhi segala kebutuhan dekorasi rumah Anda. <br>
    Dari gaya klasik hingga modern, kami hadir untuk memberikan sentuhan istimewa pada ruang hidup Anda. <br>
    Mari temukan furnitur impian Anda dan wujudkan ruang hunian yang Anda idamkan bersama kami.</p>
    </div>

    <div  class="text-center">
        <p style="color:#BBAB8C">Our Products</p>
        <h2 style="font-family: sans-serif; color:#BBAB8C;" class="fw-medium">TRENDING PRODUCT</h2>
    </div>

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

        /* .more{
            margin-right: 70%;
        } */
    </style>

    <div style="margin-right: 20px; margin-left:20px;" class="row justify-content-center mt-4">
        @if ($products->count() > 0)
            @foreach ($products as $product)
                <div class="col-md-4" style="height: 300px; margin-bottom:200px;">
                    <div class="card" style="height:100%">
                        <img src="img/{{ $product->image }}" class="card-img-top" height="100%" />
                        <center>
                            <div class="card-body">
                                <a style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:30px;" href="product/{{ $product->id }}/pdetail">{{ $product->nama }}</a>
                                <p style="color: #EEE3CB">Price: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="card-footer">
                                <div  class="d-inline">
                                    <a style="color: #BBAB8C" href=""><ion-icon size="large" name="heart-outline"></ion-icon></a>
                                    <a style="color: #BBAB8C" href="/login"><ion-icon size="large" name="cart-outline"></ion-icon></a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            @endforeach
            <div class="mb-4">
                <a style="margin-left:83%; font-size:25px;color:#BBAB8C" href="/Listproduct"> More Products >></a>
            </div>
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
