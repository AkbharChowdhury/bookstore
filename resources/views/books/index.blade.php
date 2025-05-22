@extends('layout.layout')
@section('content')
    <div class="container-fluid py-5">
        <h1>Search books</h1>

        <div class="container-fluid">
            <div class="col-sm-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query",
                        hx-get="/search" hx-trigger="keyup delay:300ms" hx-target="#results" />
                </form>
            </div>
        </div>

        @include('partials.search')
    </div>
@endsection
