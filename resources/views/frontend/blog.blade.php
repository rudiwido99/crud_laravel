@extends('template.front.main')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="my-4">{{$title}}</h1>
            @foreach ($blog as $item)
                <article class="my-3 border-bottom pb-4">
                    <h2>
                        <a href="post/{{$item->slug}}" class="text-decoration-none">{{ $item->title }}</a>
                    </h2>
                    <p>By : <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">
                        {{ $item->author->name }}</a> in <a href="/categories/{{ $item->category->slug }}"  class="text-decoration-none">{{ $item->category->name }}</a> 
                    </p>
                    <p>{{ $item->excerpt }}</p>
                    <a href="post/{{$item->slug}}" class="text-decoration-none">Read more...</a>
                </article>
            @endforeach
        </div>
    </div>
@endsection