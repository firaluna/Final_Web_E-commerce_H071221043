@extends('admin.main')
@section('container')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <h3>Edit Product</h3>
                <form method="POST" action="/product/{{ $product->id }}/update" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Name :</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $product->nama) }}"
                            placeholder="Insert new name">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Email :</label>
                        <input type="email" class="form-control" name="nama" value="{{ old('email', $product->email) }}"
                            placeholder="Insert email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Password :</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password', $product->password) }}"
                            placeholder="Insert new password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Address :</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address', $product->address) }}"
                        placeholder="Insert new address">
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
