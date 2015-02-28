@if ($errors)
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form method="post">
    <label for="name"></label>
    <input type="text" name="name" id="name" type="text"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <input type="submit"/>
</form>