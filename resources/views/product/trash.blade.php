@extends('template.main')
@section('title' , 'Data Trash')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Trash Product</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="">Product / </a>Trash</li> 
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
                        <strong>Data Trash Product</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('product/delete') }}" class="btn btn-danger btn-sm" onclick ="return confirm('Yakin ingin hapus semua data?')">Delete All
                            <i class="fa fa-trash"></i>
                        </a>
                        <a href="{{ url('product/restore') }}" class="btn btn-warning btn-sm">Restore All
                            <i class="fa fa-redo"></i>
                        </a>
                        <a href="{{ url('product') }}" class="btn btn-secondary btn-sm">Kembali
                            <i class="fa fa-undo"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Brand</th>
                                <th>Nama Product</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                {{-- <th>Info</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products->count() > 0)
                               @foreach ($products as $item)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->brand->name }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->stok }}</td>
                                    {{-- <td>{{ $item->info }}</td> --}}
                                    <td>
                                        <a href="{{ url('product/restore/'.$item->id) }}" class="btn btn-warning btn-sm">
                                            Restore
                                        </a>
                                        <a href="{{ url('product/delete/'.$item->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data?')">
                                            Delete Permanen
                                        </a>
                                        {{-- <form action="{{ url('product/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-close"></i>
                                            </button>
                                        </form> --}}
                                    </td>
                                </tr>
                            @endforeach 
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection