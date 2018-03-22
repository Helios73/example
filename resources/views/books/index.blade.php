@extends('layouts.main')

@section('content')
    <h1>Books</h1>
    <a href="{{ route('books.create') }}">Create Book</a>
    <table>
        <thead>
            <tr>
                <td>Name Book</td>
                <td>Description</td>
                <td>Authors</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book['name_book'] }}</td>
                <td>{{ $book['description'] }}</td>
                <td>
                    @foreach($book->authors as $author)
                    {{ $author->getFullName() }}
                    @endforeach
                </td>
                <td><a href="{{ route('books.edit', $book['id']) }}">Edit</a></td>
                <td>
                    <form action="{{ route('books.destroy', $book['id']) }}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection