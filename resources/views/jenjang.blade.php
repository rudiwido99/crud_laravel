@extends('template.main')
@section('title', 'Data Jenjang')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Jenjang Pendidikan</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Jenjang</a></li>
                        <li class="active">Home</li>
                    </ol>
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
                        <strong>Data Jenjang Pendidikan</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('jenjang/create') }}" class="btn btn-success">Tambah
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama</td>
                                        <td>Deskripsi</td>
                                        <td class="text-center">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jenjang as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->desc }}</td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-warning btn-sm">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ url('jenjang/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            {{-- <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                            <form action="{{ url('jenjang/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection