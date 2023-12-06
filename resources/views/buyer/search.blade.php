@extends('buyer.main')
<style>
    h1 {
        padding-top: 20px;
    }

    .card-footer a {
        text-decoration: none;
        color: #000000;
        position: relative;
    }

    .card-footer a::after {
        content: '';
        height: 2px;
        /* Mengubah tinggi garis bawah sesuai preferensi Anda */
        width: 0;
        background: #000000;
        position: absolute;
        left: 0;
        bottom: -2px;
        /* Mengubah jarak garis bawah dari teks */
        transition: width 0.5s;
        /* Mengubah properti yang mengalami transisi */
    }

    .card-footer a:hover::after {
        width: 100%;
    }
</style>
@section('content')
    <div class="container mt-4">
        <div class="text-center">
            <h1 class="mb-4 fw-bolder">Hasil Pencarian Produk</h1>
            <hr class="my-4">
        </div>

        <div class="row justify-content-center mt-4">
            @if ($products->count() > 0)
                @foreach ($products as $product)
                    <div class="col-md-4 mb-3">
                        <div class="card" style="height:100%">
                                <img src="img/{{ $product->image }}" class="card-img-top" height="100%" />
                            <center>
                                <div class="card-footer">
                                    <div class="d-inline">
                                        <a style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:30px;" href="product/{{ $product->id }}/detail">{{ $product->nama }}</a>
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

        <div class="text-center mt-4 mb-4">
            <a href="/product" class="btn btn-dark">Back</a>
        </div>
    </div>
@endsection
