@extends('layouts.layouts')

@section('content')
<div class="content py-5 ps-5">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Profile</h2>
            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="mb-3">
                    <label for="vendor" class="form-label">Vendor Name</label>
                    <input type="text" class="form-control" id="vendor" name="vendor" value="{{ old('vendor', $user->vendor) }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Description</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $user->deskripsi) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $user->address) }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                </div>

                <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $user->instagram) }}">
                </div>

                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $user->facebook) }}">
                </div>

                <div class="mb-3">
                    <label for="youtube" class="form-label">Youtube</label>
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{ old('youtube', $user->youtube) }}">
                </div>

                <div class="mb-3">
                    <label for="profile_image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="profile_image" name="profile_image">
                </div>

                <button type="submit" class="btn btn-primary">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
