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
        color: #000000;
        position: relative;
    }

    .card-body a::after {
        content: '';
        height: 2px;
        width: 0;
        background: #000000;
        position: absolute;
        left: 0;
        bottom: -2px;
        transition: width 0.5s;
    }

    .card-body a:hover::after {
        width: 100%;
    }

    .kepala {
        background-color: #222831;
    }
</style>

@section('content')
    <div style="padding:10px" class="row justify-content-center mt-4">
        @if ($products->count() > 0)
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card" style="height:30%">
                        <img src="img/{{ $product->image }}" class="card-img-top" height="100%" />
                        <center>
                            <div class="card-body">
                                <a href="product/{{ $product->id }}/pdetail">{{ $product->nama }}</a>
                                <p>Price: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-inline">
                                    <a href=""><ion-icon size="large" name="heart-outline"></ion-icon></a>
                                    <a href=""><ion-icon size="large" name="cart-outline"></ion-icon></a>
                                    {{-- <a href="product/{{ $product->id }}/edit" class="btn btn-dark btn-sm"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></a>
                                    <form class="d-inline" action="product/{{ $product->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                                <path
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                                            </svg></button>
                                    </form> --}}
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
