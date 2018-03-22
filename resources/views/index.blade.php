<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <header>
        <div>
            <h1>LIBRARY</h1>
            <a href="{{ route('books.index') }}">Books</a>
            <a href="{{ route('authors.index') }}">Authors</a>
        </div>
    </header>
    <div>
        <form action="{{ route('search') }}" method="GET">
            <input name="q" type="text">
            <input type="submit" value="Search">
        </form>
        @if(false)
        <table>
            <thead>
                <tr>
                    <td>Name Book</td>
                    <td>Description</td>
                    <td>Authors</td>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>
    </body>
</html>
