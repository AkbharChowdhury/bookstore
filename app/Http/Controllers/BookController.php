<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Support\Sleep;


class BookController extends Controller
{
    private function pagination_num()
    {
        return 6;
    }
    public function index(): View
    {
        $books = Book::paginate($this->getPageLimit());
        return view('books.index', compact('books'));
    }


    public function search(Request $request)
    {
        if ($request->input('query') == null) {

            $books = Book::where('title', 'LIKE', "%%");
            return view('partials.search', compact('books'));

        }
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%$query%")->paginate($this->getPageLimit());

        
        Sleep::for(3)->seconds();
        return view('partials.search', compact('books'));
    }

    private function getPageLimit(): int
    {
        return 6;
    }
    
    
}
