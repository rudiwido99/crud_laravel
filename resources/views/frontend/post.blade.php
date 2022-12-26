@extends('template.front.main')
@section('title', 'Single Post')
@section('content')
    <div class="container">
        <div class="row my-4">
            <article class="my-3">
                <h2>{{ $post['judul'] }}</h2>
                <h5>By : {{ $post['author'] }}</h5>
                <p>{{ $post['desc'] }}</p>
            </article>    
        </div>
        <a href="{{ url('posts') }}">Back to posts</a>
    </div>
@endsection