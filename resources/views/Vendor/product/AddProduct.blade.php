@extends('vendor.layouts.layouts')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Add Product</h4>
            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" step="0.01" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image1">Image 1</label>
                    <input type="file" name="image1" id="image1" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image2">Image 2</label>
                    <input type="file" name="image2" id="image2" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image3">Image 3</label>
                    <input type="file" name="image3" id="image3" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image4">Image 4</label>
                    <input type="file" name="image4" id="image4" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image5">Image 5</label>
                    <input type="file" name="image5" id="image5" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control" required>
                        <option value="Catering">Catering</option>
                        <option value="Videographer">Videographer</option>
                        <option value="Photographer">Photographer</option>
                        <option value="Decoration">Decoration</option>
                        <option value="Makeup Artist">Makeup Artist</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
