<h1>Publisher {{ $publisher->title }}</h1>

@foreach($books as $book)
    <div>
        {{$book->title}}
    </div>
@endforeach
