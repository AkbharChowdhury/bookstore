<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        return view('books.index', [
            'books' => Book::all()
        ]);
    }


    public function search(Request $request): View
    {
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%$query%")->get();
        return view('partials.search', compact('books'));
    }
    
    
}
