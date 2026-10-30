@extends('layout')

@section('content')
    <div class="toolbar">
        <div class="filters">
            <a href="{{ route('books.index') }}" @class(['active' => !$status])>All</a>
            @foreach (\App\Models\Book::STATUSES as $value => $label)
                <a href="{{ route('books.index', ['status' => $value]) }}" @class(['active' => $status === $value])>{{ $label }}</a>
            @endforeach
        </div>
        <a class="btn" href="{{ route('books.create') }}">+ Add book</a>
    </div>

    <form method="GET" action="{{ route('books.index') }}" class="search">
        @if ($status)
            <input type="hidden" name="status" value="{{ $status }}">
        @endif
        <input type="text" name="search" value="{{ $search }}" placeholder="Search by title or author">
        <button type="submit">Search</button>
    </form>

    @if ($books->isEmpty())
        <p class="empty">No books yet</p>
    @else
        <table>
            <tr><th>Title</th><th>Author</th><th>Status</th><th></th></tr>
            @foreach ($books as $book)
                <tr>
                    <td class="book-title">{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <span class="badge badge-{{ $book->status }}">
                            {{ \App\Models\Book::STATUSES[$book->status] ?? $book->status }}
                        </span>
                    </td>
                    <td class="actions">
                        <a class="btn btn-small btn-edit" href="{{ route('books.edit', $book) }}">Edit</a>
                        <form method="POST" action="{{ route('books.destroy', $book) }}"
                              onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-small btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
@endsection









