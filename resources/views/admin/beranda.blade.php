@extends('admin.layouts.main')

@section('title')
Admin || Home
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card p-5">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    @if (count($transaction) > 0)
                                    {{ count($transaction) }}
                                    @else
                                    0
                                    @endif
                                </h3>

                                <h4>Transaction</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-pricetags"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    @if (count($vendor) > 0)
                                    {{ count($vendor) }}
                                    @else
                                    0
                                    @endif
                                </h3>

                                <h4>Vendor</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-people"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    @if (count($user) > 0)
                                    {{ count($user) }}
                                    @else
                                    0
                                    @endif
                                </h3>
                                <h4>User</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    @if (count($product) > 0)
                                    {{ count($product) }}
                                    @else
                                    0
                                    @endif
                                </h3>

                                <h4>Product</h4>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Pie Chart
                            </h3>
                        </div>
                        <div class="card-body">
                            {!! $transactionChart->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ $transactionChart->cdn() }}"></script>

        {{ $transactionChart->script() }}
        @endsection
