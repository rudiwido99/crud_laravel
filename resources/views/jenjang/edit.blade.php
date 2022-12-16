@extends('template.main')
@section('title', 'Edit Jenjang')
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
                        <li class="active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Edit Jenjang Pendidikan</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('jenjang') }}" class="btn btn-success">Kembali
                            <i class="fa fa-undo"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">
                                <div class="col-md-4 offset-4">
                                    <form action="{{ url('jenjang/'.$jenjang->id) }}" method="post">
                                        @method('put')
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Nama Jenjang *</label>
                                            <input type="text" name="name" class="form-control" value="{{ $jenjang->name }}" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Deskripsi *</label>
                                            <textarea name="desc" class="form-control">{{ $jenjang->desc }} </textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection