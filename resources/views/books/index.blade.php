@extends('layout')

@section('content')
    <p><a href="{{ route('books.create') }}">Add book</a></p>

    @if ($books->isEmpty())
        <p>No books yet</p>
    @else
        <table>
            <tr><th>Title</th><th>Author</th><th>Status</th><th></th></tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ \App\Models\Book::STATUSES[$book->status] ?? $book->status }}</td>
                    <td><a href="{{ route('books.edit', $book) }}">Edit</a></td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection


