<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::insert([
            $this->book(title: 'To Kill a Mockingbird', author: 'Harper Lee'),
            $this->book(title: '1984', author: 'George Orwell'),
            $this->book(title: 'Sapiens: A Brief History of Humankind', author:'Yuval Noah Harari'),
            $this->book(title: 'The Catcher in the Rye', author: 'J. D. Salinger'),
            $this->book(title: 'The Silent Patient', author: 'Alex Michaelides'),
            $this->book(title: 'Educated', author: 'Tara Westover'),
            $this->book(title: 'The Hobbit', author: 'J. R. R. Tolkien'),
            $this->book(title: 'Atomic Habits: Tiny Changes, Remarkable Results', author: 'James Clear'),
            $this->book(title: 'Gone Girl', author:'Gillian Flynn'),
            $this->book(title: 'The Girl with the Dragon Tattoo', author: 'Stieg Larsson'),


        ]);

        
    }


     private function book(string $title, string $author): array
    {
        return ['title' => trim($title), 'author' => trim($author)];
        
    }

}
