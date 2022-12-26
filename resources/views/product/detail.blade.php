@extends('template.dashboard.main')
@section('title' , 'Product Detail')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="">Product / </a>Detail</li> 
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
                        <strong>Data Product Detail</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('product') }}" class="btn btn-success btn-sm">Kembali
                            <i class="fa fa-default"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th style="width:20%">Brand</th>
                                <td>{{ $product->brand->name }}</td>
                            </tr>
                            <tr>
                                <th class="">Nama Product</th>
                                <td>{{ $product->nama }}</td>
                            </tr>
                            <tr>
                                <th class="">Harga</th>
                                <td>{{ $product->harga }}</td>
                            </tr>
                            <tr>
                                <th class="">Stok</th>
                                <td>{{ $product->stok }}</td>
                            </tr>
                            <tr>
                                <th class="">Info</th>
                                <td>{{ $product->info }}</td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection