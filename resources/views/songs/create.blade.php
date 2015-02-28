@extends('app')

@section('content')
    {!! Form::open(['route'=> 'songs.store']) !!}
         @include('songs._form')
    {!! Form::close() !!}

@endsection