@extends('app')

@section('content')
    <h1>{{ $song->title }}</h1>

    @if ($song->lirycs)
        <article class="lirycs">
            {!! nl2br($song->lirycs) !!}
        </article>
        {!! link_to_route('songs_path', 'Go back home!') !!}
    @endif
@endsection