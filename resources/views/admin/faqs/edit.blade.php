@extends('layout.main')

@section('content')

    <header>
        <h1 class="title">Edit FAQ</h1>
    </header>

    <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label">Question</label>
            <div class="control">
                <input value="{{old('question') ?? $faq->question}}" class="input" type="text" name="question"
                    placeholder="Enter question" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Answer</label>
            <div class="control">
                <textarea class="textarea" name="answer" placeholder="Enter answer" required>{{old('answer') ?? $faq->answer}}
                            </textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">FAQ link</label>
            <div class="control">
                <input value="{{old('link') ?? $faq->link}}" class="input" type="text" name="link" placeholder="Enter link">
            </div>
        </div>

        <button type="submit" class="button is-primary">Submit</button>

    </form>

@include('admin.errors')

@endsection
