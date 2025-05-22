<div id="results">

    @if ($books->isEmpty())
        <p>No results found</p>
    @else
        <ul>
            @foreach ($books as $book)
                <li><strong>{{ $book->title }}</strong> by {{ $book->author }}</li>
            @endforeach
        </ul>
    @endif

</div>
