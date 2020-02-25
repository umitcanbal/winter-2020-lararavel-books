{{--resourcers/views/books/edit.blade.php--}}
<form action="/books-orm/{{ $book->id }}/edit" method="post">
    @csrf
    <label>Title</label>
    <input type="text" name="title" value="{{ $book->title }}">
    <label>Authors</label>
    <input type="text" name="authors" value="{{ $book->authors }}">
    <label for="">Image</label>
    <input type="text" name="image" value="{{ $book->image }}">
    <label for="">Publisher</label>

    <select name="publisher_id"  value="{{ $book->publisher_id }}">
        @foreach($publishers as $publisher)
            <option value="{{ $publisher->id }}">
                {{ $publisher->title }}
            </option>
        @endforeach
    </select>

    <input type="submit" value="submit">
</form>
