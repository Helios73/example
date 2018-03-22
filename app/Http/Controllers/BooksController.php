<?php
/**
 * Created by PhpStorm.
 * User: atarasov
 * Date: 22.03.18
 * Time: 10:43
 */

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        $authors = Author::all();
        return view('books.create', ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_book' => 'required',
            'description' => 'required',
        ]);

        $authorsIds = $request->input('authors');
        $authors = Author::find($authorsIds);
        $book = Book::create($request->all());
        $book->authors()->saveMany($authors);

        return redirect(route('books.index'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        $authors = Author::all();

        return view('books.edit', ['book' => $book], ['authors' => $authors]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_book' => 'required',
            'description' => 'required',
        ]);

        $authorsIds = $request->input('authors');
        $book = Book::find($id);
        $book->update($request->all());
        $book->authors()->sync($authorsIds);
        return redirect(route('books.index'));
    }
    public function destroy($id)
    {
        Book::destroy($id);
        return redirect(route('books.index'));
    }
}