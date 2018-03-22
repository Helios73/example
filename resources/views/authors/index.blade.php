@extends('layouts.main')

@section('content')
    <h1>Authors</h1>
    <a href="{{ route('authors.create') }}">Create Author</a>
    <table>
        <thead>
            <tr>
                <td>First Name</td>
                <td>Secondary Name</td>
                <td>Data Of Birth</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author['first_name'] }}</td>
                <td>{{ $author['secondary_name'] }}</td>
                <td>{{ $author['day_of_birth'] }}.{{ $author['month_of_birth'] }}.{{ $author['year_of_birth']}}</td>
                <td><a href="{{ route('authors.edit', $author['id']) }}">Edit</a></td>
                <td>
                    <form action="{{ route('authors.destroy', $author['id']) }}" method="post">
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