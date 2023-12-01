@extends('vendor.layouts.layouts')

@section('content')

<section class="intro mt-5">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,0);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card bg-dark shadow-2-strong">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-dark table-borderless mb-0 table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Image 1</th>
                                            <th scope="col">Image 2</th>
                                            <th scope="col">Image 3</th>
                                            <th scope="col">Image 4</th>
                                            <th scope="col">Image 5</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description }}</td>
                                            <td>Rp {{ $product->price }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td><img src="{{ asset($product->image1) }}" alt="{{ $product->name }}" class="img-fluid" /></td>
                                            <td><img src="{{ asset($product->image2) }}" alt="{{ $product->name }}" class="img-fluid" /></td>
                                            <td><img src="{{ asset($product->image3) }}" alt="{{ $product->name }}" class="img-fluid" /></td>
                                            <td><img src="{{ asset($product->image4) }}" alt="{{ $product->name }}" class="img-fluid" /></td>
                                            <td><img src="{{ asset($product->image5) }}" alt="{{ $product->name }}" class="img-fluid" /></td>
                                            <td>
                                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
