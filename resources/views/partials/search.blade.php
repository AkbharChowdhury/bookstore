<div id="results" class="pt-2">

    @if ($books->isEmpty())
        <div class="alert alert-primary" role="alert">
            No results found
        </div>
    @else
        <div class="container m-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($books as $book)
                    <div class="col">
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-6 text-center">
                                    <div class="ratio ratio-4x3">
                                        <img src="{{ $book->image }}" alt="{{ $book->author }}"
                                            class="img-fluid rounded-start">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $book->title }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $book->author }}

                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




</div>




@endif

</div>
