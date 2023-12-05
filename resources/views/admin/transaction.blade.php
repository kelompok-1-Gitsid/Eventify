@extends('admin.layouts.main')

@section('title')
Transaction
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header" style="width: 20vw">
                    <label for="keyword">Filter by Category & Status</label>
                    <form action="{{ route('info.index') }}" method="get">
                        <input type="text" name="keyword">
                        <button type="submit">Search</button>
                    </form>
                </div>
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead class="text-center">
                            <tr>
                                <th>Customer</th>
                                <th>Vendor</th>
                                <th>Order Date</th>
                                <th>Payment Date</th>
                                <th>Category</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($transaction as $row)
                            <tr>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->product->name }}</td>
                                <td>{{ $row->start_date }} - {{ $row->end_date }} </td>
                                <td>
                                    {{ $row->status == 'pending' ? '-' :  $row->updated_at  }}
                                </td>
                                <td>{{ $row->product->category }}</td>
                                <td>
                                    {!! $row->status == 'capture' || $row->status == 'settlement'
                                    ? '<button class="btn btn-success" disabled> Paid </button>'
                                    : '<button class="btn btn-primary" disabled> Unpaid </button>' !!}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            @endsection
