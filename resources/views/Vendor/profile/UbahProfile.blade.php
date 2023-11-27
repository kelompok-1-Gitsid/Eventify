@extends('vendor.layouts.layouts')

@section('content')
    <div class="content py-5 ps-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Edit Profile</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('vendor.update') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3">
                                <label for="name" class="form-label">Vendor Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name ?? '') }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address">{{ old('address', $user->address ?? '') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
                            </div>


                            <div class="mb-3">
                                <label for="avatar" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="avatar" name="avatar" required>
                            </div>


                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
