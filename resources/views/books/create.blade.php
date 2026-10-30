@extends('layout')

@section('content')
    <h2>Add book</h2>
    <form method="POST" action="{{ route('books.store') }}">
        @include('books.form', ['book' => null])
    </form>
@endsection



