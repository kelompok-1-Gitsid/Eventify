@extends('admin.layouts.main')

@section('title')
Admin || Transaction
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div>
                        <label for="keyword">Filter by Customer & Status</label>
                        <form action="{{ route('info.index') }}" method="get">
                            <input type="text" name="keyword">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <div class="mt-4 ms-auto">
                        <a class="btn btn-info" target="_blank" href="{{ route('info.cetakPdf') }}"><i class="fas fa-print"></i> Export PDF</a>
                        <a class="btn btn-success" href="{{ route('info.cetakExcel') }}"><i class="fas fa-print"></i> Export Excel</a>
                    </div>
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
                            @if (count($transaction) > 0)
                            @foreach ($transaction as $row)
                            <tr>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->product->name }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($row->start_date)->locale('id')->formatLocalized('%A, %d %B %Y') }} - {{ \Carbon\Carbon::parse($row->end_date)->locale('id')->formatLocalized('%A, %d %B %Y') }}
                                </td>
                                <td>
                                    {{ $row->status == 'pending' ? '-' :  \Carbon\Carbon::parse($row->updated_at)->locale('id')->formatLocalized('%A, %d %B %Y %H:%M')  }}
                                </td>
                                <td>{{ $row->product->category }}</td>
                                <td>
                                    @if ($row->status == 'capture')
                                    <span class="badge bg-success p-2"> {{ $row->status }} </span>
                                    @elseif ($row->status == 'settlement')
                                    <span class="badge bg-success p-2"> {{ $row->status }} </span>
                                    @else
                                    <span class="badge bg-danger p-2"> {{ $row->status }} </span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="6" class="text-center">No data</td>
                            </tr>
                            @endif

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            @endsection
