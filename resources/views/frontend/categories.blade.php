@extends('template.front.main')
@section('title', 'Category')
@section('content')
    <div class="container">
        <div class="row my-4">
            <h1 class="mb-5">Category</h1>

            <div class="container">
                <div class="row">
                    @foreach ($categories as $item)
                        <div class="col-md-4">
                            <a href="/categories/{{ $item->slug }}">
                                <div class="card bg-dark text-white">
                                    <img src="https://source.unsplash.com/400x400/?{{ $item->name }}" class="card-img" alt="{{ $item->name }}">
                                    <div class="card-img-overlay d-flex align-items-center p-0">
                                        <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0,0,0,0.7)">
                                            {{ $item->name }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection