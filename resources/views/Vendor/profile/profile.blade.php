@extends('vendor.layouts.layouts')

@section('content')
    <section class="vh-100" style="background-color: #f4f5f7;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-6 mb-4 mb-lg-0">
                    <div class="card mb-3" style="border-radius: .5rem;">
                        <div class="row g-0">
                            <div class="col-md-4 gradient-custom text-center text-white"
                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                @if ($user->avatar)
                                    <img src="{{ asset('uploads/' . $user->avatar) }}" alt="Avatar"
                                         class="img-fluid my-5" style="width: 80px;">
                                @else
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                         alt="Avatar" class="img-fluid my-5" style="width: 80px;">
                                @endif
                                <h5>{{ Auth::user()->name }}</h5>
                                <p>{{ Auth::user()->role }}</p>
                                <a href="{{ route('vendor.edit') }}" class="btn">
                                    <i class="far fa-edit mb-5"></i>
                                </a>
                            </div>
                            <div class="col-md-8 col-lg-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-12 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ Auth::user()->email }}</p>
                                            <h6>Address</h6>
                                            <p class="text-muted">{{ Auth::user()->address }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
