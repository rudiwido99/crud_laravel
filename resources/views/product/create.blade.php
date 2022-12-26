@extends('template.dashboard.main')
@section('title' , 'Tambah Product')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product Sport</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="">Product / </a>Tambah</li> 
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
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <strong>Tambah Data Product</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('product') }}" class="btn btn-warning btn-sm">Kembali
                            <i class="fa fa-undo"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 offset-4">
                            <form action="{{ url('product') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Product *</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" autofocus>
                                    @error('nama')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Brand *</label>
                                    <select name="brand_id" id="" class="form-control @error('brand_id') is-invalid @enderror" > 
                                        <option value="">-- Pilih --</option>
                                        @foreach ($products as $item)
                                            <option value="{{ $item->id }}" {{ old('brand_id') == $item->id ? 'selected' : null }}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autofocus> --}}
                                    @error('brand_id')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
                                    @error('harga')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}">
                                    @error('stok')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Info</label>
                                    <textarea name="info" class="form-control @error('info') is-invalid @enderror">{{ old('info') }}</textarea>
                                    @error('info')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection