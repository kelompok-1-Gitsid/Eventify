@extends('layouts.layouts')

@section('content')
@foreach ($vendors as $vendor)
    <div class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h4>Vendor Dashboard</h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Welcome Back, {{$vendor -> nama}}</h4>
                                        <p class="mb-0">Vendor Dashboard, Eventify</p>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    <img src="{{asset ('assets/images/profile.jpg')}}" class="img-fluid illustration-img" alt="Dashboard Photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex">
                    <div class="box card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">
                                        Total Orders
                                    </h3>
                                    <p>
                                        20 Orders
                                    </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Basic Table
                        </h5>
                        <h6 class="card-subtitle text-muted">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita voluptatum ab hic tempora nihil enim.
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr class="table-secondary">
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
@endsection
