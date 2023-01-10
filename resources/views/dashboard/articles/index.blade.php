@extends('template.dashboard.main')
@section('title' , 'Data Artikel')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Artikel</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="">Artikel / </a>Data</li> 
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Data Artikel</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('product/trash') }}" class="btn btn-danger btn-sm">Data Trash
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="{{ url('article/create') }}" class="btn btn-success btn-sm">Tambah
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr class="">
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->category->name }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('article/'.$article->slug) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ url('article/'.$article->slug.'/edit') }}" class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{ url('article/'.$article->slug) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="pull-left">
                        Showing {{$products->firstItem()}} of {{$products->lastItem()}} to {{$products->total()}} data entries
                    </div>
                    <div class="pull-right">
                        {{ $products->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection