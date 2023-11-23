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
                        <th>Vendor</th>
                        <th>Product Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>Rp {{ $product->price }}</td>
                            <td>{{ $product->user->vendor }}</td>
                            <td><img src="{{ asset($product->product_image) }}" alt="{{ $product->name }}" height="80" /></td>
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
