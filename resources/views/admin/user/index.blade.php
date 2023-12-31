@extends('admin.layouts.main')

@section('title')
Admin || User
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">+ Add User & Vendor</a>
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
                                <th>Name</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($user as $row)
                            <tr>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->address }}</td>
                                <td>{{ $row->email }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>
                                    <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $row->id }}">
                                        <i class="fas fa-database"></i>
                                    </a>
                                    <a href="{{ route('user.show', $row->id) }}" class="btn btn-warning" title="Edit data">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form onsubmit="return deleteData('{{ $row->name }}')" action="{{ route('user.destroy', $row->id) }}" method="post" class="d-inline">
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

                @foreach ($user as $row)
                <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group">
                                    <li class="list-group-item text-center">
                                        <img src="{{ $row->avatar ? asset($row->avatar) : asset('assets/img/profile.jpg') }}" width="100">
                                    </li>
                                    <li class="list-group-item">Name: {{ $row->name }}</li>
                                    <li class="list-group-item">Email: {{ $row->email }}</li>
                                    <li class="list-group-item">Address: {{ $row->address }}</li>
                                    <li class="list-group-item">Phone: {{ $row->phone }}</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endsection
