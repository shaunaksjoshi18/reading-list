@extends('layout')

@section('content')
    <h2>Edit book</h2>
    <form method="POST" action="{{ route('books.update', $book) }}">
        @method('PUT')
        @include('books.form')
    </form>
@endsection

