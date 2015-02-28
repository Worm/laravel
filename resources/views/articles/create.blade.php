@extends('app')

@section('content')
    <h1>Create a new Article</h1>
    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>

                @endforeach
        </ul>
        @endif
    <hr/>
    {!! Form::open(['route'=> 'articles.store']) !!}

    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
        {!! Form::label('title', 'Title:') !!}

        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>

    <!---Form group--->
    <div class="form-group">
        {!! Form::label('body', 'Body:') !!}

        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>

    <!---Form group--->
    <div class="form-group">
        {!! Form::label('published_at', 'Published On:') !!}

        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Article!',['class'=>'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection