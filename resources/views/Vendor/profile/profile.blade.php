@extends('vendor.layouts.layouts')

@section('content')
    <div class="content py-5 ps-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center p-5">
                    <div class="card-body">
                        @if ($user->avatar)
                            <img src="{{ asset('uploads/' . $user->avatar) }}" alt="Profile" class="img img-thumbnail rounded-circle w-50">
                        @else
                            <img src="{{ asset('assets/images/profile.jpg') }}" alt="Default Profile" class="img img-thumbnail rounded-circle w-50">
                        @endif

                        <h2>{{ Auth::user()->name }}</h2>

                        <a href="{{ route('vendor.edit') }}" class="btn btn-outline-success btn-sm">
                            <i class="edit fa-solid fa-pencil me-1">
                                Ubah Profil
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="content">
                    <div class="shadow border rounded p-5 mb-5">
                        <h2>Contact Information</h2>

                        <p class="card-text">
                            <span class="text-muted mb-1 d-block">Alamat :</span>
                            <i class="fa-solid fa-map me-2 text-success"></i>
                            {{ Auth::user()->address }}
                        </p>

                        <p class="card-text">
                            <span class="text-muted mb-1 d-block">Alamat Email :</span>
                            <i class="fa-solid fa-envelope text-success"></i>
                            {{ Auth::user()->email }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
