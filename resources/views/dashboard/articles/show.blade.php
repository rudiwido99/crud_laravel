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
                    <div class="row justify-content-center my-1">
                        <div class="col-lg-8">
                            <h1 class="my-3">{{ $article->title }}</h1>

                                <a href="{{ url('article') }}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Back to all my posts</a>
                                <a href="" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a>
                                <form action="{{ $article->slug }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i> Hapus
                                            </button>
                                        </form>

                                <img src="https://source.unsplash.com/1200x400/?{{ $article->category->name }}" alt="{{ $article->category->name }}" class="img-fluid mt-3">

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