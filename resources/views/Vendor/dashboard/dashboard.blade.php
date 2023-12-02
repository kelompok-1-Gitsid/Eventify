@extends('vendor.layouts.layouts')

@section('content')
    <div class="container-fluid">
        <section>

            <div class="row mt-5">
                <div class="col-12 col-md-6 mb-4">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Welcome Back, {{ Auth::user()->name }}</h4>
                                        <p class="mb-0">Vendor Dashboard, Eventify</p>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    @if ($user->avatar)
                                        <img src="{{ asset('uploads/' . $user->avatar) }}" alt="Profile"
                                            class="img-fluid illustration-img">
                                    @else
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="Default Profile"
                                            class="img-fluid illustration-img">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row align-self-center">
                                    <div class="align-self-center">
                                        <i class="fas fa-pencil-alt text-info fa-3x me-4"></i>
                                    </div>
                                    <div>
                                        <h4>Total Product</h4>
                                        <p class="mb-0">Product Amount</p>
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <h2 class="h1 mb-0"> {{$products->count()}}  Product</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-md-1">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0 me-4">Rp {{ number_format($totalSales, 2) }}</h2>
                                    </div>
                                    <div>
                                        <h4>Total Sales</h4>
                                        <p class="mb-0">Sales Amount</p>
                                    </div>
                                </div>
                                <div class="align-self-center">
                                    <i class="fas fa-wallet text-success fa-3x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
