@extends('vendor.layouts.layouts')

@section('content')

    <section class="intro mt-5">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,0);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card bg-dark shadow-2-strong">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-dark table-borderless mb-0 table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order ID</th>
                                                <th scope="col">Customer Name</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($transactions) > 0)

                                            @foreach($transactions as $transaction)

                                                <tr>

                                                    <td>{{ $transaction->id }}</td>

                                                    <td>{{ $transaction->user->name }}</td>

                                                    <td>{{ $transaction->product->name }}</td>

                                                    <td id="status_{{ $transaction->id }}">{{ $transaction->status }}</td>

                                                    <td>{{ $transaction->start_date }} - {{ $transaction->end_date }}</td>

                                                </tr>

                                            @endforeach

                                        @else

                                            <tr>

                                                <td colspan="5" class="text-center">No transactions available.</td>

                                            </tr>

                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
