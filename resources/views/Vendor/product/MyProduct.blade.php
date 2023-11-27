@extends('vendor.layouts.layouts')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-1">
            <h4>Products</h4>
            <table class="table px-4">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Image 1</th>
                        <th>Image 2</th>
                        <th>Image 3</th>
                        <th>Image 4</th>
                        <th>Image 5</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>Rp {{ $product->price }}</td>
                            <td>{{ $product->category }}</td>
                            <td><img src="{{ asset($product->image1) }}" alt="{{ $product->name }}" height="80" /></td>
                            <td><img src="{{ asset($product->image2) }}" alt="{{ $product->name }}" height="80" /></td>
                            <td><img src="{{ asset($product->image3) }}" alt="{{ $product->name }}" height="80" /></td>
                            <td><img src="{{ asset($product->image4) }}" alt="{{ $product->name }}" height="80" /></td>
                            <td><img src="{{ asset($product->image5) }}" alt="{{ $product->name }}" height="80" /></td>
                            <td>
                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
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
@endsection
