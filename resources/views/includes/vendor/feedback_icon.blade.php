@if($fb->type == 'positive')
    <span class="fa fa-plus-circle text-success"></span>
@endif
@if($fb->type == 'neutral')
    <span class="fa fa-stop-circle text-secondary"></span>
@endif
@if($fb->type == 'negative')
    <span class="fa fa-minus-circle text-danger"></span>
@endif