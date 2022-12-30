@extends('template.front.main')
@section('title', 'Article Category')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1>Article Category : {{ $category }}</h1>
            @foreach ($articles as $item)
                <article class="my-4 border-bottom">
                    <h2>
                        <a href="/post/{{$item->slug}}" class="text-decoration-none">{{ $item->title }}</a>
                    </h2>
                    <p>By : {{ $item->author->name }}</p>
                    <p>{{ $item->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </div>
@endsection