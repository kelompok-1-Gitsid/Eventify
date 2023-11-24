@extends('vendor.layouts.layouts')

@section('content')

    <div class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-5">
                <h4></h4>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 d-flex">
                    <div class="card flex-fill border-0 illustration">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="p-3 m-1">
                                        <h4>Welcome Back, {{ Auth::user()->vendor }}</h4>
                                        <p class="mb-0">Vendor Dashboard, Eventify</p>
                                    </div>
                                </div>
                                <div class="col-6 align-self-end text-end">
                                    @if ($user->profile_image)
                                        <img src="{{ asset('uploads/' . $user->profile_image) }}" alt="Profile"
                                            class="img-fluid illustration-img">
                                    @else
                                        <img src="{{ asset('assets/images/profile.jpg') }}" alt="Default Profile"
                                            class="img-fluid illustration-img">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 d-flex">
                    <div class="box card flex-fill border-0">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">
                                        Total Transactions
                                    </h3>
                                    <p>
                                        {{ $transactions->count() }} Transactions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title">
                            Transactions In Progress
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">Transaction Id</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->id }}</td>
                                        <td>{{ $transaction->status }}</td>
                                        <td>{{ $transaction->created_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No transactions available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
