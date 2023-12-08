@extends('admin.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <h1>Edit Buyer</h1>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin.buyers.update', $buyer->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <!-- Add your buyer fields here -->
                                    <div class="form-group">
                                        <label for="name">Buyer Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ $buyer->name }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Buyer Email</label>
                                        <input type="email" id="email" name="email" class="form-control" value="{{ $buyer->email }}" required>
                                    </div>

                                    <!-- Add more fields as needed -->

                                    <button type="submit" class="btn btn-primary">Update Buyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
