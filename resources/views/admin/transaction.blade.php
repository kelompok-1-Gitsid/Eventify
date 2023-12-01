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
                        <form id="filterForm">
                            @csrf
                            <div class="form-group">
                                <label for="category">Filter by Category:</label>
                                <select name="category" id="category" class="form-control">
                                    <option value="">All Categories</option>
                                    <option value="Catering">Catering</option>
                                    <option value="Videographer">Videographer</option>
                                    <option value="Videographer">Photographer</option>
                                    <option value="Decoration">Decoration</option>
                                    <option value="MUA">MUA</option>
                                </select>
                            </div>
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
                                        <td>-</td>
                                        <td>{{ $row->product->category }}</td>
                                        <td>
                                            {!! $row->status == 'Paid'
                                                ? '<button class="btn btn-success" disabled>' . $row->status . '</button>'
                                                : '<button class="btn btn-primary" disabled>' . $row->status . '</button>' !!}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <script>
                    $(document).ready(function() {
                        // Initial table load
                        loadData();

                        // Handle category change event
                        $('#category').change(function() {
                            loadData();
                        });

                        function loadData() {
                            // Get selected category
                            var category = $('#category').val();

                            // Send AJAX request to the server
                            $.ajax({
                                type: 'GET',
                                url: '#',
                                data: {
                                    category: category
                                },
                                success: function(data) {
                                    // Update the table with the new data
                                    $('#example2').html(data);
                                },
                                error: function(xhr, status, error) {
                                    console.error(xhr.responseText);
                                }
                            });
                        }
                    });
                </script>
            @endsection
