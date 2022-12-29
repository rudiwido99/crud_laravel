@extends('template.front.main')
@section('title', 'Article Category')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1>Article Category : {{ $category }}</h1>
            @foreach ($articles as $item)
                <article class="my-3">
                    <h2>
                        <a href="/post/{{$item->slug}}">{{ $item->title }}</a>
                    </h2>
                    <h5>By : {{ $item['author'] }}</h5>
                    <p>{{ $item->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </div>
@endsection