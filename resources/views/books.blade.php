<h1>Hello World!</h1>

<p>Hello, {{ $user }} {{ $surname }} from php</p>
<p>Hello, <?php echo $user;?> .... </p>

<p><?php echo htmlspecialchars($comment); ?></p>


<p>{{ $comment }}</p>

<p>{!! $comment !!}</p>

{{-- This is a comment --}}
{{-- todo: here comes something --}}

<?php echo "Hello, " . $user . " " . $surname . " from php"; ?>

@if($age > 70)
    <p>Sorry, you are too old :(</p>
@elseif($age >= 18)
    <p>Ok, you are old enough ;) </p>
@else
    <p>Crap, you are too young!</p>
@endif

<h1>My Books:</h1>

@foreach($books as $book)
    @include('book_detail')
@endforeach
