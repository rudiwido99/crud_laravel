@extends('template.front.main')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="my-4">{{$title}}</h1>

            @if ($blog->count())
                <div class="card mb-3 text-center">
                    <img src="https://source.unsplash.com/1200x400/?{{ $blog[0]->category->name }}" class="card-img-top" alt="{{ $blog[0]->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title"><a href="post/{{$blog[0]->slug}}" class="text-decoration-none text-dark">{{$blog[0]->title}}</a></h5>
                        <p>
                            <small class="text-muted">
                                By : <a href="/authors/{{ $blog[0]->author->username }}" class="text-decoration-none">
                                {{ $blog[0]->author->name }}</a> in <a href="/categories/{{ $blog[0]->category->slug }}"  class="text-decoration-none">
                                {{ $blog[0]->category->name }}</a> {{ $blog[0]->created_at->diffForHumans() }}  
                            </small>
                        </p>
                        <p class="card-text">{{ $blog[0]->excerpt }}</p>
                        <a href="post/{{$blog[0]->slug}}" class="text-decoration-none btn btn-primary">Read more</a>

                    </div>
                </div>
            @else
                <p class="text-center fs-4">No post found.</p>
            @endif

            <div class="container">
                <div class="row">
                    @foreach ($blog->skip(1) as $item)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="position-absolute px-3 py-2 text-white" style="background: rgb(0,0,0,0.7)"><a href="/categories/{{ $item->category->slug }}" class="text-decoration-none text-white">{{ $item->category->name }}</a></div>
                                <img src="https://source.unsplash.com/400x300?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="post/{{$item->slug}}" class="text-decoration-none text-dark">{{ $item->title }}</a></h5>
                                    <small class="text-muted">
                                        <p>By : <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">
                                            {{ $item->author->name }}</a> {{ $item->created_at->diffForHumans() }}
                                        </p>
                                    </small>
                                    <p>{{ $item->excerpt }}</p>
                                    <a href="post/{{$item->slug}}" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection