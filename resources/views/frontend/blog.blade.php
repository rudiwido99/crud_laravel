@extends('template.front.main')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row my-4">
            @foreach ($blog as $item)
                <article class="my-3 border-bottom pb-4">
                    <h2>
                        <a href="post/{{$item->slug}}" class="text-decoration-none">{{ $item->title }}</a>
                    </h2>
                    <p>By : {{ $item->user->name }} in <a href="/categories/{{ $item->category->slug }}"  class="text-decoration-none">{{ $item->category->name }}</a> </p>
                    <p>{{ $item->excerpt }}</p>
                    <a href="post/{{$item->slug}}" class="text-decoration-none">Read more...</a>
                </article>
            @endforeach
        </div>
    </div>
@endsection