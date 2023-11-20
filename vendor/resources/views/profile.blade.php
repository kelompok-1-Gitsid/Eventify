@extends('layouts.layouts')

@section('content')
<div class="content py-5 ps-5">
    <div class="row">
        <div class="col-lg-4">
            <div class="card text-center p-5">
                <div class="card-body">
                    <img src="{{asset ('assets/images/profile.jpg')}}" alt="Profile Picture" class="img img-thumbnail rounded-circle w-50">
                    @foreach ($vendors as $vendor)
                    <h2>{{Auth::user()->name}}</h2>

                    <p class="card-text text-muted">
                        Wedding Organizer Terbaik dan Terpercaya
                    </p>
                    <a href="#" class="btn btn-success btn-sm">
                        <i class="edit fa-solid fa-pencil me-1">
                            Ubah Profil
                        </i>
                    </a>
                </div>
            </div>


        </div>
        <div class="col-lg-8">
            <div class="shadow border rounded p-5 mb-5">
                <h2>About Me</h2>
                <p>{{Auth::user()->deskripsi}}</p>
            </div>
            <div class="content">
            <div class="shadow border rounded p-5 mb-5">
                <h2>Contact Information</h2>
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="card-text">
                                <span class="text-muted mb-1 d-block">Alamat :</span>
                                <i class="fa-solid fa-map me-2 text-success"></i>
                                {{Auth::user()->alamat}}
                            </p>
                            <p class="card-text">
                                <span class="text-muted mb-1 d-block">Alamat Email :</span>
                                <i class="fa-solid fa-envelope text-success"></i>
                                {{Auth::user()->email}}
                            </p>
                            <p class="card-text">
                                <span class="text-muted mb-1 d-block">Nomor Telepon :</span>
                                <i class="fa-solid fa-phone me-2 text-success"></i>
                                {{Auth::user()->no_telepon}}
                            </p>
                        </div>

                        <div class="col-lg-6">
                            <div>
                                Follow Me At
                            </div>
                            <a href="{{Auth::user()->instagram}}" target="_blank" class="text-decoration-none link-success fs-2">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="{{Auth::user()->facebook}}" target="_blank" class="text-decoration-none link-success fs-2">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="{{Auth::user()->youtube}}" target="_blank" class="text-decoration-none link-success fs-2">
                                <i class="fa-brands fa-youtube"></i>
                            </a>

                        </div>
                    </div>
            </div>
        </div>

        </div>
    </div>
</div>
@endforeach
@endsection
