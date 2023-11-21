@extends('admin.layouts.main')

@section('title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Username</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Adelia</td>
                                    <td>Jalan Bukit Duri</td>
                                    <td>+6285712312</td>
                                    <td>
                                        <a class="btn btn-warning d-inline" href="#"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger d-inline" href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Jalan Bukit Duri</td>
                                    <td>+6285712312</td>
                                    <td>
                                        <a class="btn btn-warning d-inline" href="#"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger d-inline" href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Jalan Bukit Duri</td>
                                    <td>+6285712312</td>
                                    <td>
                                        <a class="btn btn-warning d-inline" href="#"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger d-inline" href="#"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            @endsection
