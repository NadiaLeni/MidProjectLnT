<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    
    public function createBook(){
        return view('createBook');
    }
    
    public function storeBook(Request $request){
        Book::create([
            'bookTitle' => $request->bookTitle,
            'author' => $request->author,
            'pageTotal' => $request->pageTotal,
            'releaseDate' => $request->releaseDate
        ]);
        return redirect('/status');
    }

    public function showBooks(){
        $books = Book::all();
        return view('showBooks', compact('books'));
    }

    public function deleteBook(){
        $books = Book::all();
        return view('deleteBook', compact('books'));
    }

    public function destroyBook($id){
        $books = Book::where('id', $id)->delete();
        return redirect('/status/book');
    }

    public function updateBook(){
        $books = Book::all();
        return view('updateBook', compact('books'));
    }

    public function editBook($id){
        $books = Book::findorfail($id);
        return view('updateInfoBook', compact('books'));
    }

    public function reupdateBook(Request $request, $id){
        $books = Book::findorfail($id);
        $books->update($request->all());
        // $books->bookTitle = $request->bookTitle;
        // $books->author = $request->author;
        // $books->pageTotal = $request->pageTotal;
        // $books->releaseDate = $request->releaseDate;
        // $books->reupdateBook();
        return redirect('/update/book');
    }

}
