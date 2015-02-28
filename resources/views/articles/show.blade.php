@extends('app')

@section('content')
        @if ($article)
            <article>
                <h2>{{ $article->title  }}</h2>
                <div class="body">
                    {{ $article->body  }}
                </div>
            </article>
        @endif
@endsection