@extends('admin.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <form method="POST" action="/product/store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name :</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"
                            placeholder="Insert name">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email :</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Insert email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password :</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                            placeholder="Insert password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address :</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                            placeholder="Insert address">
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>

                    <div >
                        <button style="background-color: #164863; color:white;" type="submit" class="btn">Add Product</button>
                        <a style="background-color:#164863 ; color:white; " href="/product" class="btn">
                            <ion-icon size="small" name="arrow-back-outline"></ion-icon>
                        </a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

