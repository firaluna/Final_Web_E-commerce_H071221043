@extends('user.main')
@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card p-4 mt-5">
                <h3>Edit Product</h3>
                <form method="POST" action="{{ route('update', ['id' => $product->id]) }}" enctype="multipart/form-data">
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
                        <label class="form-label">Price :</label>
                        <input type="text" class="form-control" name="harga"
                            value="{{ old('harga', $product->harga) }}" placeholder="Insert new price">
                        @if ($errors->has('harga'))
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Description :</label>
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="Insert new description">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="form-label">Stock :</label>
                        <textarea class="form-control" rows="4" name="stok" placeholder="Insert new stock">{{ old('stok', $product->stok) }}</textarea>
                        @if ($errors->has('stok'))
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Category :</label>
                        <select class="form-select" name="jenis">
                            <option>{{ $product->jenis }}</option>
                            <option value="chair">Chair</option>
                            <option value="sofa">Sofa</option>
                            <option value="table">Table</option>
                            <option value="bed">Bed</option>
                            <option value="lamp">Lamp</option>
                            <option value="cabinet">Cabinet</option>
                            <option value="Sweater">Wardrobe</option>
                        </select>
                        @if ($errors->has('jenis'))
                            <span class="text-danger">{{ $errors->first('jenis') }}</span>
                        @endif
                    </div>


                    <div class="mb-3 mt-3">
                        <label class="form-label">Image :</label>
                        <input type="file" class="form-control" name="image" placeholder="Insert new image">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-dark mt-4">Edit Product</button>
                </form>
            </div>
        </div>
    </div>
@endsection
