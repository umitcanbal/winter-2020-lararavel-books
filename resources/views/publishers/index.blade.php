<h1>Publishers</h1>
@foreach($publishers as $publisher)
    <div>
        {{$publisher->title}}
        <a href="/publishers/{{ $publisher->id }}">
            More details...
        </a>
    </div>

@endforeach
