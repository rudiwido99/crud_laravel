@extends('template.dashboard.main')
@section('title' , 'Data Artikel')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail Artikel</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="{{ url('article') }}">Artikel / </a>Data</li> 
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-1">
        <div class="animated fadeIn">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                {{-- <div class="card-header">
                    <div class="pull-left">
                        <strong>Detail Artikel</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('product/create') }}" class="btn btn-success btn-sm">Kembali
                            <i class="fa fa-back"></i>
                        </a>
                    </div>
                </div> --}}
                <div class="card-body">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-8">
                            <h1 class="my-3">{{ $article->title }}</h1>
                                <p>By : <a href="/posts?author=/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in 
                                    <a href="/posts?category={{ $article->category->slug }}" class="text-decoration-none">
                                    {{ $article->category->name }}</a> 
                                </p>
                                <img src="https://source.unsplash.com/1200x400/?{{ $article->category->name }}" alt="{{ $article->category->name }}" class="img-fluid">

                                <article class="my-3">
                                    {!! $article->desc !!}
                                </article>

                            <a href="{{ url('posts') }}">Back to posts</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection