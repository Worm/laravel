@extends('app')

@section('content')
    <h1>Articles</h1>
    <hr/>
    @foreach($articles as $article)
        <article>
            <h2>{!! link_to_route('articles.show',$article->title,[$article->id]) !!}</h2>
            <div class="body">
                {{ $article->body  }}
            </div>
        </article>
    @endforeach
@endsection