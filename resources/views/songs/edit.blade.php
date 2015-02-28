@extends('app')

@section('content')
    <h1>{{ $song->title }}</h1>
    {!! Form::model($song,['route'=> ['songs.update', $song->slug], 'method' => 'PATCH']) !!}
        @include('songs._form')
    {!! Form::close() !!}
    {!! Form::open(['method' => 'DELETE', 'route' => ['songs.destroy', $song->slug]]) !!}
        <div class="form-group">
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
@endsection