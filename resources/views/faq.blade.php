@extends('layout.main')

@section('content')

    <header>
        <h1>Frequently Asked Questions</h1>
    </header>

    <a href="{{ route('admin.faqs.create') }}" class="button is-success is-dark">Create New FAQ</a>


    @foreach ($faqs as $faq)
        <section class="content">
            <h2 class="section-title">{{$faq->question}}</h2>
            <form style="display: inline" action="{{ route('admin.faqs.destroy', $faq) }}" method="POST">
                @csrf
                @method ('DELETE')
                <p class="date-element">
                    {{$faq->updated_at}}
                    <a href="{{ route('admin.faqs.edit', $faq) }}" class="button is-info is-dark is-small">Edit FAQ</a>
                    <button class="button is-danger is-dark is-small">Delete FAQ</button>
                </p>
            </form>
            <article>{!! $faq->answer !!}</article>
        </section>
    @endforeach

@endsection
