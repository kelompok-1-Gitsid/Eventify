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
                        <form method="POST" action="{{ route('mua.update', $id) }}" enctype="multipart/form-data">
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
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="change_images" name="change_images">
                                    <label class="form-check-label" for="change_images">Change Images</label>
                                </div>
                                @if(old('change_images') || $data->product->image1)
                                    <div class="form-group">
                                        <label for="image1">Product Image 1:</label>
                                        <input type="file" class="form-control" id="image1" name="image1" accept=".jpg, .png, .jpeg">
                                    </div>
                                @endif
                                <div class="form-group pt-2">
                                    <label for="image2">Product Image 2:</label>
                                    <input type="file" class="form-control" id="image2" name="image2" accept=".jpg, .png, .jpeg">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="image3">Product Image 3:</label>
                                    <input type="file" class="form-control" id="image3" name="image3" accept=".jpg, .png, .jpeg">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="image4">Product Image 4:</label>
                                    <input type="file" class="form-control" id="image4" name="image4" accept=".jpg, .png, .jpeg">
                                </div>
                                <div class="form-group pt-2">
                                    <label for="image5">Product Image 5:</label>
                                    <input type="file" class="form-control" id="image5" name="image5" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-danger" href="{{ route('mua.index') }}">Batal</a>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            @endsection
