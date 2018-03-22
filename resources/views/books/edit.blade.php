@extends('layouts.main')

@section('content')
    <h1>Edit book</h1>
    <div>

    </div>
    <form action="{{ route('books.update', $book['id']) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <input name="name_book" type="text" value="{{ $book['name_book'] }}"><br>
        <input name="description" type="text" value="{{ $book['description'] }}"><br>
        <select multiple name="authors[]">
            @foreach($authors as $author)
                <option @if($book->authors->contains($author)) selected @endif value="{{ $author->id }}">{{ $author->getFullName() }}</option>
            @endforeach
        </select><br>
        <input type="submit" value="save">
    </form>
@endsection