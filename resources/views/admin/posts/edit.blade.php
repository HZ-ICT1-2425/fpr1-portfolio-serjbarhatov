@extends('layout.main')

@section('content')

    <header>
        <h1 class="title">Edit Post</h1>
    </header>

    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input value="{{ old('title', $post->title) }}" class="input" type="text" name="title" placeholder="Enter post title"
                    required>
            </div>
        </div>

        <div class="field">
            <label class="label">Slug</label>
            <div class="control">
                <input value="{{ old('slug', $post->slug) }}" class="input" type="text" name="slug" placeholder="Enter post slug" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Article Source</label>
            <div class="control">
                <input value="{{ old('article_source', $post->article_source) }}" class="input" type="text" name="article_source"
                    placeholder="Enter post source">
            </div>
        </div>

        <div class="field">
            <label class="label">Summary</label>
            <div class="control">
                <textarea class="textarea" name="summary" placeholder="Enter post summary"
                    required>{{ old('summary', $post->summary) }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Body</label>
            <div class="control">
                <textarea class="textarea" name="body" placeholder="Enter post content" required>{{ old('body', $post->body) }}</textarea>
            </div>
        </div>

        <button type="submit" class="button is-primary">Submit</button>
    </form>

    @include('admin.errors')

@endsection
