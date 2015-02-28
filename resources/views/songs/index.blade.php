@extends('app')

@section('content')
    <h1>Justien Bieber Official Club</h1>
    <ul>
        @foreach($songs as $song)
            <li>{!! link_to_route('song_path',$song->title,[$song->slug]) !!}</li>
        @endforeach
    </ul>
@endsection