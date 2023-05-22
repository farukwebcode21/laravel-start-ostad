<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookController extends Controller {
    private $books = [
        [
            'author' => 'Jane Austen',
            'title'  => 'Pride and Prejudice',
        ],
        [
            'author' => 'F. Scott Fitzgerald',
            'title'  => 'The Great Gatsby',
        ],
        [
            'author' => 'George Orwell',
            'title'  => '1984',
        ],
        [
            'author' => 'J.R.R. Tolkien',
            'title'  => 'The Loardof the Ring ',
        ],
        [
            'author' => 'Harper Lee',
            'title'  => 'The King of Mackigver',
        ],
    ];
    function books(Request $request) {
        $limit =$request->query('limit', 0);
        if($limit == 0){
            return $this->books;
        }else{
            return array_splice($this->books, 0, $limit);
        }
    }
    function getBooks(string $id ) {
        $bookId = $id - 1;
        return $this->books[$bookId];
    }
    function getBookField(string $id, string $field ) {
        $bookId = $id - 1;
        $book = $this->books[$bookId];
        return $book[$field];
    }

    function createBook(Request $request){
        $author = $request->get('author');
        $title = $request->get('title');
        return "Author = {$author} and Title = {$title}";
    }
    
    // function createBook(){
    //     $author = request()->get('author');
    //     $title = request()->get('title');
    //     return "Author = {$author} and Title = {$title}";
    // }
}