@extends('vendor.layouts.layouts')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Price:</label>
                            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                        </div>

                        <!-- Tambahkan input untuk memungkinkan pengguna memilih untuk mengganti gambar atau tidak -->
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="change_images" name="change_images">
                            <label class="form-check-label" for="change_images">Change Images</label>
                        </div>

                        <!-- Tambahkan input file untuk setiap gambar jika pengguna memilih untuk mengganti gambar -->
                        @if(old('change_images') || isset($product->image1))
                        <div class="form-group">
                            <label for="image1">Product Image 1:</label>
                            <input type="file" class="form-control" id="image1" name="image1">
                        </div>
                        @endif
                        <div class="form-group pt-2">
                            <label for="image2">Product Image 2:</label>
                            <input type="file" class="form-control" id="image2" name="image2">
                        </div>
                        <div class="form-group pt-2">
                            <label for="image3">Product Image 3:</label>
                            <input type="file" class="form-control" id="image3" name="image3">
                        </div>
                        <div class="form-group pt-2">
                            <label for="image4">Product Image 4:</label>
                            <input type="file" class="form-control" id="image4" name="image4">
                        </div>
                        <div class="form-group pt-2">
                            <label for="image5">Product Image 5:</label>
                            <input type="file" class="form-control" id="image5" name="image5">
                        </div>

                        <div class="form-group pt-2">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="Catering" {{ $product->category == 'Catering' ? 'selected' : '' }}>Catering</option>
                                <option value="Videographer" {{ $product->category == 'Videographer' ? 'selected' : '' }}>Videographer</option>
                                <option value="Photographer" {{ $product->category == 'Photographer' ? 'selected' : '' }}>Photographer</option>
                                <option value="Decoration" {{ $product->category == 'Decoration' ? 'selected' : '' }}>Decoration</option>
                                <option value="Makeup Artist" {{ $product->category == 'Makeup Artist' ? 'selected' : '' }}>Makeup Artist</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-2">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
