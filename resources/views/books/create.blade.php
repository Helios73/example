@extends('layouts.main')

@section('content')
    <h1>Create book</h1>
    <div>

    </div>
    <form action="{{ route('books.store') }}" method="post">
        {{ csrf_field() }}
        <input name="name_book" type="text" placeholder="Name Book"><br>
        <input name="description" type="text" placeholder="Description"><br>
        <select multiple name="authors[]">
            @foreach($authors as $author)
            <option value="{{ $author->id }}">{{ $author->getFullName() }}</option>
            @endforeach
        </select><br>
        <input type="submit" value="save">
    </form>
@endsection