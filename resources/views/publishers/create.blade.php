{{--resourcers/views/publishers/create.blade.php--}}
<form action="/publishers" method="post">
    @csrf
    <input type="text" name="publisher_title">
    <input type="submit" value="submit">
</form>
