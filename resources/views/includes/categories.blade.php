<div class="card market-categories">
    <div class="card-body">
        <h4 class="category-header h5">Categories</h4><hr>
        <div class="list-group categories">
            @include('includes.subcategories', ['categories' => $categories])
        </div>
    </div>
</div>