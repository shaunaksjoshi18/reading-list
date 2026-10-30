@csrf

<label>Title
    <input type="text" name="title" value="{{ old('title', $book->title ?? '') }}">
</label>
@error('title') <div class="error">{{ $message }}</div> @enderror

<label>Author
    <input type="text" name="author" value="{{ old('author', $book->author ?? '') }}">
</label>
@error('author') <div class="error">{{ $message }}</div> @enderror

<label>Status
    <select name="status">
        @foreach (\App\Models\Book::STATUSES as $value => $label)
            <option value="{{ $value }}" @selected(old('status', $book->status ?? 'to-read') === $value)>{{ $label }}</option>
        @endforeach
    </select>
</label>
@error('status') <div class="error">{{ $message }}</div> @enderror

<p>
    <button type="submit">Save</button>
    <a href="{{ route('books.index') }}">Cancel</a>
</p>

