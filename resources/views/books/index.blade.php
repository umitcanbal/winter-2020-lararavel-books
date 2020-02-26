<h1>Books</h1>
@foreach($books as $book)
    <div style="display:flex; flex-direction:row;margin-bottom:1rem">
        <div style="width: 15rem">
            <img src="{{$book->image}}" alt="{{ $book->title }}">
        </div>
        <div>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->authors }}</p>
            <a href="{{ action('BookORMController@show', [$book->id]) }}">
                Read more...
            </a>
            <br>
            <a href="/cart/add/{{ $book->id }}">
                Add to cart
            </a>
            <form action="/cart/add" method="post">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <input type="submit" value="Add to cart"/>
            </form>
        </div>
    </div>
@endforeach
