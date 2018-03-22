<?php
/**
 * Created by PhpStorm.
 * User: atarasov
 * Date: 22.03.18
 * Time: 11:51
 */

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', ['authors' => $authors]);
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'secondary_name' => 'required',
            'day_of_birth' => 'required',
            'month_of_birth' => 'required',
            'year_of_birth' => 'required',
        ]);
        Author::create($request->all());

        return redirect(route('authors.index'));
    }

    public function edit($id)
    {
        $author = Author::find($id);
        return view('authors.edit', ['author' => $author]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'secondary_name' => 'required',
            'day_of_birth' => 'required',
            'month_of_birth' => 'required',
            'year_of_birth' => 'required',
        ]);
        $author = Author::find($id);
        $author->update($request->all());
        return redirect(route('authors.index'));
    }
    public function destroy($id)
    {
        Author::destroy($id);
        return redirect(route('authors.index'));
    }
}