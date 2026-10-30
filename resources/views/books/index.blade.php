@extends('layout')

@section('content')
    @if ($books->isEmpty())
        <p>No books yet</p>
    @else
        <table>
            <tr><th>Title</th><th>Author</th><th>Status</th></tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ \App\Models\Book::STATUSES[$book->status] ?? $book->status }}</td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection

