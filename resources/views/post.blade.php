@extends('layout.main')

@section('content')

    <header>
        <h1>{{$post->title}}</h1>
    </header>

    <section class="content">
        <p class="blog-post-date">{{$post->updated_at}}</p>
        <article>{!! str_replace("\n", replace: "<br>", subject: $post->body) !!}
            @if (!empty($post->article_source))
                <a href="{{ $post->article_source }}" target="_blank" rel="noopener noreferrer">
                    Full article
                </a>
            @endif
        </article>

    </section>

@endsection
