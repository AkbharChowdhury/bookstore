<div id="search-results" class="pt-2">
    <div class="container m-4">
        @include('partials.loading')
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @include('partials.book_row', ['books' => $books])
        </div>
    </div>

</div>


<div id="pagination-links" class="p-3" 
    hx-boost="true" 
    hx-target="#search-results">
    {{ $books->links() }}
</div>