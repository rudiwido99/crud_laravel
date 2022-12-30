@extends('template.front.main')
@section('title', 'Single Post')
@section('content')
    <div class="container">
        
            <h1 class="my-5">{{ $articles->title }}</h1>
            <p>By : <a href="/authors/{{ $articles->author->username }}">{{ $articles->author->name }}</a> in <a href="/categories/{{ $articles->category->slug }}" class="text-decoration-none">
                {{ $articles->category->name }}</a> 
            </p>
            {!! $articles->desc !!}
            <br><br>
        <a href="{{ url('posts') }}">Back to posts</a>
    </div>
@endsection