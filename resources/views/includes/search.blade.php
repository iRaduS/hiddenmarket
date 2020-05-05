<div class="row justify-content-center mt-3 mb-3">
        <div class="col">
            <form action="{{route('search')}}" method="post">
                {{csrf_field()}}
                <div class="form-group m-0">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Search for something...">
                        <div class="input-group-append">
                            <button class="btn btn-indigo"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>