@extends('template.front.main')
@section('title', 'Blog')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1>Article Category</h1>
            @foreach ($categories as $item)
                <ul>
                    <li>
                        <h2><a href="/categories/{{$item->slug}}">{{ $item->name }}</a></h2>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection