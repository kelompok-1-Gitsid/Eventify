@extends('vendor.layouts.layouts')

@section('content')
    <div class="content py-5 ps-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center p-5">
                    <div class="card-body">

                        <img src="{{ asset('assets/images/profile.jpg') }}" alt="Default Profile" class="img img-thumbnail rounded-circle w-50">

                        <h2>#</h2>


                        <a href="{{route('vendor.edit')}}" class="btn btn-success btn-sm">
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

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <p class="form-control-static">#</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Email</label>
                            <p class="form-control-static">#</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nomor Telepon</label>
                            <p class="form-control-static">#</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
