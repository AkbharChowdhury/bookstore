<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\View\View;
use Illuminate\Support\Sleep;


class BookController extends Controller
{
    private const RECORDS_PER_PAGE = 6;

    public function index(Request $request)  
    {  
        Sleep::for(3)->seconds(); 
        $title = $request->input('q') ?? '';  
        $books = Book::where('title', 'LIKE', '%'. $title .'%')->paginate(self::RECORDS_PER_PAGE);  
        
        if ($request->header('hx-request') && $request->header('hx-target') === 'search-results') {  
            return view('partials.search', compact('books'));
        } 
  
        return view('books.index', compact('books'));  
    }
    
    
}
