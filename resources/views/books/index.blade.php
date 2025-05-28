@extends('layout.layout')
@section('content')
    <div class="container-fluid py-5" id="book_container">
        <h1>Search books</h1>
        <hr>
        <div class="container-fluid">
            <div class="col-sm-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" focus type="search" placeholder="Begin Typing To Search books..."
                        aria-label="Search" name="query", hx-get="{{ route('books.index') }}"
                        hx-trigger="input changed delay:300ms, keyup[key=='Enter'], load" hx-target="#search-results"
                        hx-swap="outerHTML" hx-indicator=".htmx-indicator" />
                </form>
            </div>
        </div>
        @include('partials.search')
    </div>
@endsection
@section('scripts')
    <script src="/pagination.js"></script>
@endsection
