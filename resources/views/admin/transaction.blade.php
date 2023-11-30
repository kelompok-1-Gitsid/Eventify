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
                                <tr>
                                    <td>Adelia</td>
                                    <td>Amira Catering</td>
                                    <td>15-10-23</td>
                                    <td>05-10-23</td>
                                    <td>Catering</td>
                                    <td><button class="btn btn-primary" disabled>Paid</button></td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Ruang Reka</td>
                                    <td>15-10-23</td>
                                    <td>05-10-23</td>
                                    <td>Videographer</td>
                                    <td><button class="btn btn-primary" disabled>Paid</button></td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Wilhelmina Wedding</td>
                                    <td>15-01-24</td>
                                    <td>-</td>
                                    <td>Decoration</td>
                                    <td><button class="btn btn-danger" disabled>Unpaid</button></td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Adelia MUA</td>
                                    <td>20-01-24</td>
                                    <td>-</td>
                                    <td>MUA</td>
                                    <td><button class="btn btn-danger" disabled>Unpaid</button></td>
                                </tr>
                                <tr>
                                    <td>Adelia</td>
                                    <td>Red Circle photography</td>
                                    <td>25-01-24</td>
                                    <td>-</td>
                                    <td>Photographer</td>
                                    <td><button class="btn btn-danger" disabled>Unpaid</button></td>
                                </tr>
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
