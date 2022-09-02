@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="title-create-buku">Edit Buku</h1>
</div>


<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3 bg-text-create">
            <label for="title" class="form-label">Judul Buku</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 bg-text-create">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug', $post->slug) is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3 bg-text-create">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" required value="{{ old('penulis', $post->penulis) }}">
            @error('penulis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 bg-text-create">
            <label for="tanggal_rilis" class="form-label">Tanggal Rilis</label>
            <input type="date" class="form-control @error('tanggal_rilis') is-invalid @enderror" id="tanggal_rilis" name="tanggal_rilis" required value="{{ old('tanggal_rilis', $post->tanggal_rilis) }}">
            @error('tanggal_rilis')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 bg-text-create">
            <label for="halaman" class="form-label">Halaman</label>
            <input type="number" class="form-control @error('halaman') is-invalid @enderror" id="halaman" name="halaman" required value="{{ old('halaman', $post->halaman) }}">
            @error('halaman')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 bg-text-create">
            <label for="bahasa" class="form-label">Bahasa</label>
            <input type="text" class="form-control @error('bahasa') is-invalid @enderror" id="bahasa" name="bahasa" required value="{{ old('bahasa', $post->bahasa) }}">
            @error('bahasa')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3 bg-text-create">
            <label for="rating" class="form-label">Rating</label>
            <input type="number" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" required value="{{ old('rating', $post->rating) }}">
            @error('rating')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3 bg-text-create">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach($categories as $category)
                @if(old('category_id', $post->category_id) == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3 bg-text-create">
            <label for="image" class="form-label">Upload Image</label>
            <input type="hidden" name="oldImage" value="{{ $post->image }}">
            @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif

            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="mb-3 bg-text-create">
            <label for="body" class="form-label">Sinopsis</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>


        <button type="submit" class="btn btn-primary">Update Posts</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })


    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection