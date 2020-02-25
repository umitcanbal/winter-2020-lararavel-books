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
        </div>
    </div>
@endforeach
