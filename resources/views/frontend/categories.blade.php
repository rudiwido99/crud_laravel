@extends('template.front.main')
@section('title', 'Category')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="mb-5">Category</h1>
            @foreach ($categories as $item)
                <ul>
                    <li>
                        <h2><a href="/categories/{{$item->slug}}" class="text-decoration-none">{{ $item->name }}</a></h2>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endsection