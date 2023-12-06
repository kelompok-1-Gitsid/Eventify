@extends('admin.layouts.main')

@section('title')
Create Catering Product
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('catering.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
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
                                <label for="user">User</label>
                                <select name="user" id="user" class="form-control" required>
                                    <option selected disabled>Pick User</option>
                                    @foreach ($user as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a class="btn btn-danger" href="{{ route('catering.index') }}">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
