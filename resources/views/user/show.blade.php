@extends('user.main')
<style>
    .card{
        background-color: #9BABB8;
    }

    h3{
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: #EEE3CB;
    }

    label {
        color: #EEE3CB;
        font-family: sans-serif;
    }

    img {
        display: flex;
        margin-left: auto;
        margin-right: auto;
        border-radius: 10px;
    }

    table {
        text-align: justify;
        /* margin-top: 5px; */
        /* margin-left: 13%; */
        /* font-family: sans-serif; */
    }
</style>
@section('content')
<div class="mt-4">
    <a style="background-color: #9BABB8; color:#EEE3CB; margin-left:70px;" href="{{ route('index') }}" class="btn">
        <ion-icon size="large" name="arrow-back-outline"></ion-icon>
    </a>
</div>
    <div class="container">
        <center>
            <div class="row justify-content-center">
                <div class="col-sm-8 mb-5">
                    <div style="height: 100%; background-color:#9BABB8" class="card p-4 mb-7" >
                        <img src="/img/{{ $product->image }}" width="250px" height="50%">
                        <table>
                            <form>
                                <tr>
                                    <h3><label></label></h3>
                                    <h3><span style="font-family:Georgia, 'Times New Roman', Times, serif; color:#EEE3CB">{{ $product->nama }}</span></h3>
                                </tr>
                                <tr>
                                    <td><label><b>Price </b></label></td>
                                    <td><span style="color: #EEE3CB; font-family:sans-serif">: Rp {{ number_format($product->harga, 0, ',', '.') }}</span></td>
                                </tr>
                                <tr>
                                    <td><label><b>Category</b></label></td>
                                    <td><span style="color: #EEE3CB; font-family:sans-serif">: {{ $product->jenis }}</span></td>
                                </tr>
                                <tr>
                                    <td><label><b>Description</b></label></td>
                                    <td><span style="color: #EEE3CB; font-family:sans-serif">: {{ $product->deskripsi }}</span></td>
                                </tr>
                                <tr>
                                    <td><label><b>Stock</b></label></td>
                                    <td><span style="color: #EEE3CB; font-family:sans-serif">: {{ $product->stok }}</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-inline position-absolute start-50 translate-middle-x" style="margin-top: 30px;  ">
                                            <a style="color: #EEE3CB;" href=""><ion-icon size="large" name="heart-outline"></ion-icon></a>
                                            <a style="color: #EEE3CB;" href=""><ion-icon size="large" name="cart-outline"></ion-icon></a>
                                        </div>
                                    </td>
                                    </tr>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection
