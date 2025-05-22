@extends('layout.layout')
@section('content')
 <h1>Search books</h1>

    <input type="search" name="query", placeholder="search" hx-get="/search" hx-trigger="keyup delay:300ms" hx-target="#results" >
    @include('partials.search')
    
@endsection