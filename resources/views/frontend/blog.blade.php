@extends('template.front.main')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row my-4">
            @foreach ($blog as $item)
                <article class="my-3">
                    <h2>
                        <a href="post/{{$item->slug}}">{{ $item->title }}</a>
                    </h2>
                    <h5>By : {{ $item['author'] }}</h5>
                    <p>{{ $item->excerpt }}</p>
                </article>
            @endforeach
        </div>
    </div>
@endsection