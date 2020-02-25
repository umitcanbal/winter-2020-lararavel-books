{{--resourcers/views/books/create.blade.php--}}
<form action="/books" method="post">
    @csrf
    <label>Title</label>
    <input type="text" name="title">
    <label>Authors</label>
    <input type="text" name="authors">
    <label for="">Image</label>
    <input type="text" name="image">
    <label for="">Publisher</label>

    <select name="publisher_id">
        @foreach($publishers as $publisher)
            <option value="{{ $publisher->id }}">
                {{ $publisher->title }}
            </option>
        @endforeach
    </select>

    <input type="submit" value="submit">
</form>
