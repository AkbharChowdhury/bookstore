<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Support\Sleep;


class BookController extends Controller
{
    private const RECORDS_PER_PAGE = 6;

    private function filterBooks(string $title)
    {
        return Book::where('title', 'LIKE', "%$title%");
    }

    public function index(): View
    {
        
        $books = Book::orderBy('title')->paginate(self::RECORDS_PER_PAGE);
        $links = $books;
        return view('books.index', compact('books', 'links'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query == null) {

            $books = $this->filterBooks(title: '')->orderBy('title');
                    $links = $books;

            return view('partials.search', compact('books', 'links'));
        }

        $books = $this->filterBooks(title: $query)->orderBy('title')->paginate(self::RECORDS_PER_PAGE);
        $links = $books;

        
        Sleep::for(3)->seconds();
        return view('partials.search', compact('books', 'links'));
    }


    
    
}
