@extends('layout.main')

@section('content')

<header>
    <h1 class="title">Create a New FAQ</h1>
</header>

<form action="{{ route('admin.faqs.store') }}" method="POST">
    @csrf
    <div class="field">
        <label class="label">Question</label>
        <div class="control">
            <input class="input" type="text" name="question" placeholder="Enter question" required>
        </div>
    </div>

    <div class="field">
        <label class="label">Answer</label>
        <div class="control">
            <textarea class="textarea" name="answer" placeholder="Enter answer" required></textarea>
        </div>
    </div>

    <div class="field">
        <label class="label">FAQ link</label>
        <div class="control">
            <input class="input" type="text" name="link" placeholder="Enter link">
        </div>
    </div>

    <button type="submit" class="button is-primary">Submit</button>
</form>

@endsection
