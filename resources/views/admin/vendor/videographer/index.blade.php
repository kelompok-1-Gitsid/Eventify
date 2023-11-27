@extends('admin.layouts.main')

@section('title')
    Videographer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('vendor') }}"><i class="fas fa-arrow-left"></i></a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @if (session('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('msg') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Vendor</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($video as $row)
                                    <tr>
                                        <td>{{ $row->vendor_name }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->phone }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            <a href="#" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#myModal" data-id="{{ $row->id }}">
                                                Open Modal
                                            </a>
                                            <a href="{{ route('video.show', $row->id) }}" class="btn btn-warning"
                                                title="Edit data">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form onsubmit="return deleteData('{{ $row->vendor_name }}')"
                                                action="{{ route('video.destroy', $row->id) }}" method="post"
                                                class="d-inline">
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
                    <!-- /.card-body -->
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item">Vendor : {{ $row->vendor_name }}</li>
                                    <li class="list-group-item">Owner : {{ $row->vendor_owner }} </li>
                                    <li class="list-group-item">Address : {{ $row->address }}</li>
                                    <li class="list-group-item">Email : {{ $row->email }}</li>
                                    <li class="list-group-item">Phone : {{ $row->phone }}</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <!-- Additional Modal Buttons Go Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $('#myModal').on('show.bs.modal', function(event) {
                        var button = $(event.relatedTarget); // Button that triggered the modal
                        var videoId = button.data('id'); // Extract data-id attribute's value
                        // Perform AJAX request or use the videoId to fetch data and update modal content
                        var modal = $(this);
                        modal.find('.modal-title').text('Video ID: ' + videoId);
                        modal.find('.modal-body').html('<p>Content for video ID ' + videoId + '</p>');
                    });
                </script>
            @endsection
