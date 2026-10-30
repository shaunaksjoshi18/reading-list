<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');

        $books = Book::query()
            ->when(array_key_exists((string) $status, Book::STATUSES), fn ($q) => $q->where('status', $status))
            ->latest()
            ->get();

        return view('books.index', compact('books', 'status'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        Book::create($this->validated($request));
        return redirect()->route('books.index');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($this->validated($request));
        return redirect()->route('books.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'title'  => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'status' => ['required', Rule::in(array_keys(Book::STATUSES))],
        ]);
    }
}






