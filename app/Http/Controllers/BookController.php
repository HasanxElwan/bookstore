<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    function allBooks(){
        $books = Book::get();
        return view('books',[
            'books'=>$books,
        ]);
    }
}
