@extends('layouts.main')

@section('content')
    <h1>Create book</h1>
    <div>

    </div>
    <form action="{{ route('authors.store') }}" method="post">
        {{ csrf_field() }}
        <input name="first_name" type="text" placeholder="Name Book"><br>
        <input name="secondary_name" type="text" placeholder="Description"><br>
        <input name="day_of_birth" type="text" placeholder="Day Of Birth"><br>
        <input name="month_of_birth" type="text" placeholder="Month Of Birth"><br>
        <input name="year_of_birth" type="text" placeholder="Year Of Birth"><br>
        <input type="submit" value="save">
    </form>
@endsection