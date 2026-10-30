@extends('layout')

@section('content')
    <p><a href="{{ route('books.create') }}">Add book</a></p>

    <p class="filters">
        <a href="{{ route('books.index') }}" @class(['active' => !$status])>All</a>
        @foreach (\App\Models\Book::STATUSES as $value => $label)
            <a href="{{ route('books.index', ['status' => $value]) }}" @class(['active' => $status === $value])>{{ $label }}</a>
        @endforeach
    </p>

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
                    <td>
                        <a href="{{ route('books.edit', $book) }}">Edit</a>
                        <form method="POST" action="{{ route('books.destroy', $book) }}" style="display:inline"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection








