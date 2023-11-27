@extends('vendor.layouts.layouts')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
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

                        <div class="form-group">
                            <label for="image1">Product Image 1:</label>
                            <input type="file" class="form-control" id="image1" name="image1" value="{{ $product->image1 }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image2">Product Image 2:</label>
                            <input type="file" class="form-control" id="image2" name="image2" value="{{ $product->image2 }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image3">Product Image 3:</label>
                            <input type="file" class="form-control" id="image3" name="image3" value="{{ $product->image3 }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image4">Product Image 4:</label>
                            <input type="file" class="form-control" id="image4" name="image4" value="{{ $product->image4 }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image5">Product Image 5:</label>
                            <input type="file" class="form-control" id="image5" name="image5" value="{{ $product->image5 }}" required>
                        </div>

                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control" required>
                                <option value="Catering">Catering</option>
                                <option value="Videographer">Videographer</option>
                                <option value="Photographer">Photographer</option>
                                <option value="Decoration">Decoration</option>
                                <option value="MUA">MUA</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
