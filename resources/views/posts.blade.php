@extends('layouts.main')


@section('container')



<!-- AWAL SEARCH-->
<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control bg-search" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn tombol-search" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
<!--AKHIR SEARCH -->

@if ($posts->count())

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-judul-detail py-2">
            <div class="judul-buku-detail">{{ $title }}</div>
        </div>
    </div>
</div>

<div class="container mt-2 bg-list-buku">
    <div class="row">
        <div class="row">

            @foreach($posts->skip(0) as $post)
            <div class="col-md-2 mb-3 kolom">
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-white">
                    <div class="gambar">
                        @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                        @else
                        <img src="https://source.unsplash.com/61x91?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <p class="card-text"><i class="bi bi-star-fill"></i> {{ $post->rating }}</p>
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

            <div class="d-flex justify-content-end">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
</div>


@else
<p class="text-center fs-4">No post Found.</p>
@endif




@endsection