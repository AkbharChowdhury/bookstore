<div id="search-results" class="pt-2">
    <div class="container m-4">
        @include('partials.loading')
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @include('partials.book')
        </div>
    </div>
        @include('partials.pagination')
</div>
