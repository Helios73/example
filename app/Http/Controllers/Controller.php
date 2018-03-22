<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Book;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $books = Book::all();

        return view('index', ['books' => $books]);
    }

    public function search(Request $request)
    {

        $books = Book::search($request->input('q', ''));
        dd($books);

        return view('index', ['books' => $books]);
    }
}
