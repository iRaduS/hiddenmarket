@extends('master.admin')

@section('admin-content')

    <h1 class="mb-3">Market Statistics</h1>

    <div class="card-columns">
        <div class="card text-center">
            <div class="card-body">
                <h1>
                    {{ $total_products }}
                </h1>
            </div>
            <div class="card-footer">
                Number of products in market
            </div>
        </div>
        <div class="card text-center">
            <div class="card-body">
                <h1>
                    {{ $total_purchases }}
                </h1>
            </div>
            <div class="card-footer">
                Times someone bought a products from market
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h1>
                    {{ $total_users }}
                </h1>
            </div>
            <div class="card-footer">
                Number of users registered in market
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h1>
                    {{ $total_vendors }}
                </h1>
            </div>
            <div class="card-footer">
                Number of vendors on this market
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h1>
                    @include('includes.currency', ['usdValue' => $avg_product_price])
                </h1>
            </div>
            <div class="card-footer">
                Average product price
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h1>
                    @include('includes.currency', ['usdValue' => $total_spent])
                </h1>
            </div>
            <div class="card-footer">
                Total money spent on this market
            </div>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h1>
                    {{ $total_daily_purchases }}
                </h1>
            </div>
            <div class="card-footer">
                Purchases in last 24h
            </div>
        </div>

    </div>


@stop