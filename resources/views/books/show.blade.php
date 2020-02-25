<div style="display:flex; flex-direction:row;margin-bottom:1rem">
    <div style="width: 15rem">
        <img src="{{$book->image}}" alt="{{ $book->title }}">
    </div>
    <div>
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->authors }}</p>
        <a href="{{ action('BookORMController@index') }}">
            Back to index
        </a>
    </div>
</div>

