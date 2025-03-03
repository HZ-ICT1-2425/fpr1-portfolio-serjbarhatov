@extends('layout.main')

@section('content')

<header>
    <h1 class="title">Create a New Post</h1>
</header>

<form action="{{ route('admin.posts.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" name="title" placeholder="Enter post title" required value="{{ old('title') }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Slug</label>
        <div class="control">
            <input class="input" type="text" name="slug" placeholder="Enter post slug" required value="{{ old('slug') }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Article Source</label>
        <div class="control">
            <input class="input" type="text" name="article_source" placeholder="Enter post source" value="{{ old('article_source') }}">
        </div>
    </div>

    <div class="field">
        <label class="label">Summary</label>
        <div class="control">
            <textarea class="textarea" name="summary" placeholder="Enter post summary" required>{{ old('summary') }}</textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">Body</label>
        <div class="control">
            <textarea class="textarea" name="body" placeholder="Enter post content" required>{{ old('body') }}</textarea>
        </div>
    </div>

    <button type="submit" class="button is-primary">Submit</button>
</form>

@include('admin.errors')

@endsection
