@extends('user.main')
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
    <div class="d-flex flex-row-reverse mt-4  me-5">
        <a style="background-color: #9BABB8; color:#EEE3CB;" href="/index/create" class="btn">New Product</a>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block mt-3">
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <div style="margin-right: 20px; margin-left:20px;" class="row justify-content-center mt-4">
        @if ($products->count() > 0)
            @foreach ($products as $product)
                <div class="col-md-4" style="height: 300px; margin-bottom:200px;">
                    <div class="card" style="height: 100%" >
                        <img src="img/{{ $product->image }}" class="card-img-top" height="100%" />
                        <center>
                            <div class="card-body">
                                <a style="font-family: Georgia, 'Times New Roman', Times, serif; font-size:30px;" href="product/{{ $product->id }}/show">{{ $product->nama }}</a>
                                <p style="color: #EEE3CB">Price: Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                            </div>
                            <div class="card-footer">
                                <div class="d-inline">
                                    <a style="color:#967E76" href="product/{{ $product->id }}/edit" class="btn btn-sm">
                                        <ion-icon size="large" name="create-outline"></ion-icon>
                                    </a>
                                    <form class="d-inline" action="product/{{ $product->id }}/delete" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button style="color: red" type="submit" class="btn btn-sm">
                                            <ion-icon size="large" name="trash-outline"></ion-icon>
                                        </button>
                                    </form>
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
