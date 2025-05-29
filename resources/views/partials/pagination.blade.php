 <div id="pagination-links" class="p-3" hx-boost="true" hx-target="#search-results">
     {{ $books->withQueryString()->links('pagination::bootstrap-5') }}

 </div>
