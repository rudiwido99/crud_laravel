@extends('template.dashboard.main')
@section('title', 'Tambah Artikel')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="animated fadeIn">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Artikel</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><a href="">Artikel / </a>Tambah</li> 
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
                        <strong>Edit Data Artikel</strong>
                    </div>
                    <div class="pull-right">
                        <a href="{{ url('brand') }}" class="btn btn-warning btn-sm">Kembali
                            <i class="fa fa-undo"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form action="{{ url('article/'.$article->slug) }}" method="post" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="form-group">
                                    <label for="title">Judul *</label>
                                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $article->title) }}" autofocus value="{{ old('title')}}">
                                    @error('title')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $article->slug) }}">
                                    @error('slug')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <label for="slug">Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            @if(old('category_id', $article->category_id) == $category->id)
                                                <option value="{{ $category->id }}" selected>{{$category->name}}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                 </div>

                                 <div class="mb-3">
                                    <label for="image" class="form-label">Upload Image</label>
                                    <input type="hidden" name="oldImage" value="{{ $article->image }}">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/'.$article->image ) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                    @error('image')
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="slug">Tulis Artikel</label>
                                    @error('desc')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <input id="desc" type="hidden" name="desc" value="{{ old('desc', $article->desc) }}">
                                    <trix-editor input="desc"></trix-editor>
                                 </div>
                                <button type="submit" class="btn btn-success btn-sm">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('article/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });
    </script> --}}
    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function (oFREvent){
                imgPreview.src = oFREvent.target.result;
            }

        }

    </script>
@endsection
