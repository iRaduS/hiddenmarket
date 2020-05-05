<div class="float-right">
    @if($productsView == 'list')
        <span class="viewpicker text-indigo"><i class="fa fa-list"></i></span>
        <a href="{{ route('setview', 'grid') }}" class="viewpicker p-md-0 p-2"><i class="fa fa-th"></i></a>
    @else
        <a href="{{ route('setview', 'list') }}" class="viewpicker p-md-0 p-2"><i class="fa fa-list"></i></a>
        <span class="viewpicker text-indigo"><i class="fa fa-th"></i></span>
    @endif
</div>