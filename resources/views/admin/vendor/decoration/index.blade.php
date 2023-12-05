@extends('admin.layouts.main')

@section('title')
Decoration
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('vendor') }}"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="card-body">
                    @if (session('msg'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('msg') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table id="example2" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>Owner</th>
                                <th>Vendor</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->owner->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>Rp {{ $product->price }}</td>
                                <td>
                                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $product->id }}">
                                        <i class="fas fa-database"></i>
                                    </a>
                                    <a href="{{ route('photo.show', $product->id) }}" class="btn btn-warning" title="Edit data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form onsubmit="return deleteData('{{ $product->name }}')" action="{{ route('photo.destroy', $product->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Hapus data" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @foreach ($products as $product)
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item text-center">
                                        <img src="{{ $product->owner->avatar ? asset('uploads/' . $product->owner->avatar) : asset('assets/img/profile.jpg') }}" width="100">
                                    </li>
                                    <li class="list-group-item">Owner: {{ $product->owner->name }}</li>
                                    <li class="list-group-item">Vendor: {{ $product->name }}</li>
                                    <li class="list-group-item">Description: {{ $product->description }}</li>
                                    <li class="list-group-item">Price: Rp {{ $product->price }}</li>
                                    <li class="list-group-item">Email: {{ $product->owner->email }}</li>
                                    <li class="list-group-item">Address: {{ $product->owner->address }}</li>
                                    <li class="list-group-item">Phone: {{ $product->owner->phone }}</li>
                                    <li class="list-group-item">
                                        @if($product->image1 || $product->image2 || $product->image3 || $product->image4 || $product->image5)
                                            <div id="carouselExample" class="carousel slide">
                                                <div class="carousel-inner">
                                                    @if($product->image1)
                                                        <div class="carousel-item active">
                                                            <img src="{{ asset($product->image1) }}" class="d-block w-100" height="300" alt="...">
                                                        </div>
                                                    @endif
                                                    @if($product->image2)
                                                        <div class="carousel-item">
                                                            <img src="{{ asset($product->image2) }}" class="d-block w-100" height="300" alt="...">
                                                        </div>
                                                    @endif
                                                    @if($product->image3)
                                                        <div class="carousel-item">
                                                            <img src="{{ asset($product->image3) }}" class="d-block w-100" height="300" alt="...">
                                                        </div>
                                                    @endif
                                                    @if($product->image4)
                                                        <div class="carousel-item">
                                                            <img src="{{ asset($product->image4) }}" class="d-block w-100" height="300" alt="...">
                                                        </div>
                                                    @endif
                                                    @if($product->image5)
                                                        <div class="carousel-item">
                                                            <img src="{{ asset($product->image5) }}" class="d-block w-100" height="300" alt="...">
                                                        </div>
                                                    @endif
                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>
                                        @else
                                            <img src="{{ asset('images/products/no-image.png') }}" class="w-100" alt="...">
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endsection
