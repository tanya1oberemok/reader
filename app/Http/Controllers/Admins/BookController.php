<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return $books;
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->forceFill($request->all());
        $book->save();
        return $book;
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return $book;
    }

    public function delete(Book $book)
    {
        $book->delete();
        return response(500);
    }
}
