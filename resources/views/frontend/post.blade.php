@extends('template.front.main')
@section('title', 'Single Post')
@section('content')
<section class="about">
        <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="my-3">{{ $articles->title }}</h1>
                    <p>By : <a href="/posts?author=/{{ $articles->author->username }}" class="text-decoration-none">{{ $articles->author->name }}</a> in 
                        <a href="/posts?category={{ $articles->category->slug }}" class="text-decoration-none">
                        {{ $articles->category->name }}</a> 
                    </p>
                    @if ($articles->image)
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/'. $articles->image) }}" alt="{{ $articles->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400/?{{ $articles->category->name }}" alt="{{ $articles->category->name }}" class="img-fluid">
                    @endif

                    <article class="my-3">
                        {!! $articles->desc !!}
                    </article>

                <a href="{{ url('posts') }}">Back to posts</a>
            </div>
        </div>
    </div>
</section>

@endsection