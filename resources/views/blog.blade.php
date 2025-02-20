@extends('layout.main')

@section('content')

    <header>
        <h1>Blog</h1>
        <p>Check out the latest posts</p>
    </header>

    <a href="{{ route('admin.posts.create') }}" class="button is-success is-dark">Create New Post</a>


    @foreach ($posts as $post)
        <section class="content">
            <h2 class="section-title">{{$post->title}}</h2>
            <form style="display: inline" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                @csrf
                @method ('DELETE')
                <p class="date-element">
                    {{$post->updated_at}}
                    <a href="{{ route('admin.posts.edit', $post) }}" class="button is-info is-dark is-small">Edit post</a>
                    <button class="button is-danger is-dark is-small">Delete post</button>
                </p>
            </form>
            <article>{{$post->summary}} <a href="/blog-posts/{{$post->slug}}" class="read-more">Read&nbsp;more...</a>
            </article>
        </section>
    @endforeach



@endsection
