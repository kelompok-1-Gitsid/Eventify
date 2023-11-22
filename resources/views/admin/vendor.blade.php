@extends('admin.layouts.main')

@section('title')
    Vendor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card elevation-3 mb-5" style="width: 18rem;">
                                <img src="{{ asset('assets') }}/img/gambar1.jpg" class="card-img-top rounded-top">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class='card-header'>Photographer</h5>
                                        <a href="{{ route('photo.index') }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card elevation-3 mb-5" style="width: 18rem;">
                                <img src="{{ asset('assets') }}/img/gambar2.jpg" class="card-img-top rounded-top">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class='card-header'>Videographer</h5>
                                        <a href="{{ route('video.index') }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card elevation-3 mb-5" style="width: 18rem;">
                                <img src="{{ asset('assets') }}/img/gambar3.jpg" class="card-img-top rounded-top">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class='card-header'>Catering</h5>
                                        <a href="{{ route('catering.index') }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card elevation-3" style="width: 18rem;">
                                <img src="{{ asset('assets') }}/img/gambar4.jpg" class="card-img-top rounded-top">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class="card-header">Makeup Artist</h5>
                                        <a href="{{ route('mua.index') }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card elevation-3" style="width: 18rem;">
                                <img src="{{ asset('assets') }}/img/gambar5.jpg" class="card-img-top rounded-top">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h5 class='card-header'>Decoration</h5>
                                        <a href="{{ route('decoration.index') }}" class="btn btn-primary mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection