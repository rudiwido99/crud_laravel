@extends('template.front.main')
@section('title', 'Single Post')
@section('content')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="my-3">{{ $articles->title }}</h1>
                    <p>By : <a href="/authors/{{ $articles->author->username }}" class="text-decoration-none">{{ $articles->author->name }}</a> in 
                        <a href="/posts?category={{ $articles->category->slug }}" class="text-decoration-none">
                        {{ $articles->category->name }}</a> 
                    </p>
                    <img src="https://source.unsplash.com/1200x400/?{{ $articles->category->name }}" alt="{{ $articles->category->name }}" class="img-fluid">

                    <article class="my-3">
                        {!! $articles->desc !!}
                    </article>

                <a href="{{ url('posts') }}">Back to posts</a>
            </div>
        </div>
    </div>
@endsection