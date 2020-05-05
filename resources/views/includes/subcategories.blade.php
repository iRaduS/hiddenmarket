@foreach($categories as $cat)
    <div class="category">
        <a href="{{ route('category.show', $cat) }}" class="list-group-item category @if(isset($category) && $cat -> isAncestorOf(optional($category))) active @endif  align-items-center rounded-0 list-group-item-action d-flex justify-content-between">
            {{ $cat -> name . " (" .  $cat -> num_products . ")"}}
            <!--<span class="badge badge-warning badge-pill">{{ $cat -> num_products }}</span>-->
            <i class="fa fa-plus"></i>
        </a>
        @if($cat -> children -> isNotEmpty())
            <div class="pl-4 subcategories">
                @include('includes.subcategories', ['categories' => $cat -> children])
            </div>
        @endif
    </div>
@endforeach