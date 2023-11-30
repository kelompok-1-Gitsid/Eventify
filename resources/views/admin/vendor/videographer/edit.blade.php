@extends('admin.layouts.main')

@section('title')
    Edit Data Vendor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('video.update', $id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ $data->name }}" autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Vendor Name</label>
                                    <input type="text" class="form-control @error('vendor') is-invalid @enderror"
                                        id="vendor" name="vendor" value="{{ $data->product->name }}" autofocus>
                                    @error('vendor')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $data->email }}" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" cols="30" rows="5"
                                        class="form-control @error('address') is-invalid @enderror">{{ $data->address }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{ $data->phone }}" autofocus>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price" value="{{ $data->product->price }}" autofocus>
                                    @error('price')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="5"
                                        class="form-control @error('description') is-invalid @enderror">{{ $data->product->description }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-danger" href="{{ route('video.index') }}">Batal</a>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            @endsection
