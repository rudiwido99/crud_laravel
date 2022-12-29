@extends('template.front.main')
@section('title', 'Single Post')
@section('content')
    <div class="container">
        
            <h1 class="my-5">{{ $post->title }}</h1>
            <p>By : Rudi Wido Atmojo in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
            {!! $post->desc !!}
            
        <a href="{{ url('posts') }}">Back to posts</a>
        {{-- Article::create([
            'title' => 'Judul Postingan Ketiga',
            'category_id' => 3,
            'slug' => 'judul-postingan-ketiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, molestias.',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid ducimus provident perferendis? Architecto molestias quos quibusdam sit animi quasi fuga.'
        ]) --}}
    </div>
@endsection