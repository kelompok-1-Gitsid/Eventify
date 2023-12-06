@extends('vendor.layouts.layouts')

@section('content')
<section style="background-color: #fff;">
    <div class="container py-5">


        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">

                        @if ($user->avatar)
                        <img src="{{ asset($user->avatar) }}" alt="Avatar" class="rounded-circle img-fluid mt-3" style="width: 150px;">
                        @else
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="Avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        @endif
                        <h5 class="mt-3">{{ Auth::user()->name }}</h5>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('vendor.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                            </div>
                            <div class="col-sm-3  mt-2">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9  mt-2">
                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                            </div>
                            <div class="col-sm-3  mt-2">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9  mt-2">
                                <p class="text-muted mb-0">{{ Auth::user()->phone }}</p>
                            </div>
                            <div class="col-sm-3  mt-2">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9  mt-2">
                                <p class="text-muted mb-0">{{ Auth::user()->address}}</p>
                            </div>
                        </div>
                        <hr>
                        <!-- Add other user information here -->
                    </div>
                </div>
                <!-- Add project status cards here -->
            </div>
        </div>
    </div>
</section>
@endsection
