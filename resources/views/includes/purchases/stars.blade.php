@for($i = 1; $i<= $stars; $i++)
    <i class="fa fa-star"></i>
@endfor
{{-- half star --}}
@if(($stars - round($stars, 0)) != 0)
    <i class="fa fa-star-half"></i>
@endif
@for($i = 1; $i<= 5 -$stars; $i++)
    <i class="fa fa-star"></i>
@endfor