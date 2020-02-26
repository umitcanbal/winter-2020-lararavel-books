<h1>Cart</h1>

@foreach($items as $item)
    <div>
        <h3>{{ $item->book->title }}</h3>
        Count: {{ $item->count }}
    </div>
@endforeach

