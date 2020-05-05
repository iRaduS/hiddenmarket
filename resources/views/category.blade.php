@extends('master.main')

@section('title', $category -> name . ' category')

@section('content')
    <div class="row">
        <div class="col-lg-3">
            @include('includes.search')
            @include('includes.categories')
        </div>
        <div class="col-lg-9">
            <div class="status-filter-bar">
                <div class="row">
                    <div class="col">
                        <h1 class="h5 text-uppercase m-0">{{ $category -> name}}
                            <small>- category</small>
                        </h1>
                    </div>
                    <div class="col">
                        @include('includes.viewpicker')
                    </div>
                </div>
            </div>

            <br>

            @if($productsView == 'list')
                @foreach($products as $product)
                    @include('includes.product.row', ['product' => $product])
                @endforeach
            @else
                @foreach($products->chunk(3) as $chunks)
                    <div class="row mt-3">
                        @foreach($chunks as $product)
                            <div class="col-md-4 my-md-0 my-2 col-12">
                                @include('includes.product.card', ['product' => $product])
                            </div>
                        @endforeach
                    </div>
                @endforeach
            @endif

            {{ $products -> links('includes.paginate') }}
        </div>

    </div>

@stop