@extends('layouts.layouts')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Add Product</h4>
            <form action="{{ route('products.store') }}" method="POST">
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
                    <input type="number" name="price" id="price" step="0.01" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="product_image">Image</label>
                    <input type="text" name="product_image" id="product_image" class="form-control" required>
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
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
