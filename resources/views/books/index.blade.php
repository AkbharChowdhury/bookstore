@extends('layout.layout')
@section('content')
    <div class="container-fluid py-5">
        <h1>Search books</h1>

        <hr>
        <div class="container-fluid">
            <div class="col-sm-2">


                <form class="d-flex" role="search">
                    <input class="form-control me-2" focus
                     type="search"
                      placeholder="Begin Typing To Search books..."
                        aria-label="Search" 
                        name="query", 
                        hx-get="{{ route('search') }}"
                        hx-trigger="input changed delay:500ms, keyup[key=='Enter'], load" 
                        hx-target="#search-results"
                        hx-indicator=".htmx-indicator"
                        
                        />
                </form>
            </div>
        </div>

        @include('partials.search')
    </div>
@endsection
