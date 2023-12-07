@extends('user.dashboard.sellerdashboard')
@section('content')
    <div class="row justify-content-center">
        <div style="margin-left: 20%;" class="col-sm-8">
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
                    <div class="mb-3 mt-3">
                        <label class="form-label">Price :</label>
                        <input type="text" class="form-control" name="harga" value="{{ old('harga') }}"
                            placeholder="Insert price">
                        @if ($errors->has('harga'))
                            <span class="text-danger">{{ $errors->first('harga') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Category:</label>
                        <select class="form-select" name="jenis">
                            <option value="" disabled selected>Select category</option>
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
                        <label class="form-label">Description :</label>
                        <textarea class="form-control" rows="4" name="deskripsi" placeholder="Insert description">{{ old('deskripsi') }}</textarea>
                        @if ($errors->has('deskripsi'))
                            <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                        @endif
                    </div>



                    <div class="mb-3 mt-3">
                        <label class="form-label">Stock :</label>
                        <input type="number" class="form-control" name="stok" value="{{ old('stok') }}"
                            placeholder="Insert stock">
                        @if ($errors->has('stok'))
                            <span class="text-danger">{{ $errors->first('stok') }}</span>
                        @endif
                    </div>

                    <div class="mb-3 mt-3">
                        <label class="form-label">Image :</label>
                        <input type="file" class="form-control" name="image" placeholder="Insert image">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <div >
                        <button style="background-color: #9BABB8; color:#EEE3CB;" type="submit" class="btn">Add Product</button>
                        <a style="background-color: #9BABB8; color:#EEE3CB;" href="/index" class="btn">
                            <ion-icon size="small" name="arrow-back-outline"></ion-icon>
                        </a>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

