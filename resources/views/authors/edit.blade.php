@extends('layouts.main')

@section('content')
    <h1>Edit book</h1>
    <div>

    </div>
    <form action="{{ route('authors.update', $author['id']) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}
        <input name="first_name" type="text" value="{{ $author['first_name'] }}"><br>
        <input name="secondary_name" type="text" value="{{ $author['secondary_name'] }}"><br>
        <input name="day_of_birth" type="text" value="{{ $author['day_of_birth'] }}"><br>
        <input name="month_of_birth" type="text" value="{{ $author['month_of_birth'] }}"><br>
        <input name="year_of_birth" type="text" value="{{ $author['year_of_birth'] }}"><br>
        <input type="submit" value="save">
    </form>
@endsection