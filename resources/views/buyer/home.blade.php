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

  <div>
    <p style="margin-left: 10%; margin-right:10%; margin:70px; color:#9BABB8; font-family:Georgia, 'Times New Roman', Times, serif" class=" text-center fs-5 ">
        Selamat datang di MoonLit! Temukan kenyamanan dan keindahan dalam setiap detail furnitur kami. <br>
        Jelajahi koleksi eksklusif kami yang dirancang untuk memenuhi segala kebutuhan dekorasi rumah Anda. <br>
        Dari gaya klasik hingga modern, kami hadir untuk memberikan sentuhan istimewa pada ruang hidup Anda. <br>
        Mari temukan furnitur impian Anda dan wujudkan ruang hunian yang Anda idamkan bersama kami.</p>
    </div>

    <div  class="text-center">
        <p style="color:#BBAB8C">Our Products</p>
        <h2 style="font-family: sans-serif; color:#BBAB8C;" class="fw-medium">TRENDING PRODUCT</h2>
    </div>


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
                                {{-- <div  class="d-inline">
                                    <form action="">
                                        <button  type="submit" style="color: #BBAB8C; border:none" href=""><ion-icon size="large" name="heart-outline"></ion-icon></button>
                                    </form>
                                </div> --}}

                                <div class="d-inline">
                                    <form action="">
                                        <button onclick="addToCart({{ $product->id }})" type="submit" style="color: #BBAB8C; border:none" href=""><ion-icon size="large" name="cart-outline"></ion-icon></button>
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

@section('scripts')
    <script>
        function addToCart(productId) {
            // Kirim AJAX request ke endpoint CartController untuk menambahkan produk ke keranjang
            axios.post('/cart', { product_id: productId })
                .then(response => {
                    console.log(response.data);
                    alert('Produk berhasil ditambahkan ke keranjang!');
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menambahkan produk ke keranjang.');
                });
        }
    </script>
@endsection
