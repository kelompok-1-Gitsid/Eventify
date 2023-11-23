@extends('admin.layouts.main')

@section('title')
    Edit Data Make up Artist
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('mua.update', $id) }}">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Vendor</label>
                                    <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                        id="fullname" name="fullname" value="{{ $fullname }}" autofocus>
                                    @error('fullname')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        id="username" name="username" value="{{ $username }}" autofocus>
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="address" id="address" cols="30" rows="5"
                                        class="form-control @error('address') is-invalid @enderror">{{ $address }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror"
                                        id="phone" name="phone" value="{{ $phone }}" autofocus>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ $email }}" autofocus>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-danger" href="{{ route('mua.index') }}">Batal</a>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            @endsection
