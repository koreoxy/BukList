@extends('layouts.main')


@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 bg-judul-detail py-2">
            <div class="judul-buku-detail">{{ $post->title }}</div>
        </div>
    </div>
</div>

<div class="container pt-3">
    <div class="row justify-content-center bg-buku-detail">
        <!-- kolom gambar -->
        <div class="col-md-2 ">
            @if ($post->image)
            <div class="">
                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid bg-image-info">
            </div>

            @else
            <img src="https://source.unsplash.com/139x229?{{ $post->category->name }}" class="img-fluid bg-image-info">
            @endif

            <ul class="list pt-3">
                <li class="list-group rating-detail">
                    <p class=" text-rating-detail">Rating <i class="bi bi-star-fill"></i> {{ $post->rating}}</p>
                </li>
            </ul>
        </div>

        <!-- kolom text informasi -->
        <div class="col-md-3">
            <h5>Informasi Buku :</h5>

            <ul class="list px-1">
                <li class="list-group">Penulis
                    <p class="text-informasi-buku">{{ $post->penulis }}</p>
                </li>
                <li class="list-group py-1">Tanggal Rilis
                    <p class="text-informasi-buku">{{ $post->tanggal_rilis }}</p>
                </li>
                <li class="list-group py-1">Halaman
                    <p class="text-informasi-buku">{{ $post->halaman }}</p>
                </li>
                <li class="list-group py-1">Bahasa
                    <p class="text-informasi-buku">{{ $post->bahasa }}</p>
                </li>
                <li class="list-group py-1">Category/Genre
                    <p class="text-informasi-buku">{{ $post->category->name }}</p>
                </li>
            </ul>

        </div>

        <!-- kolom text sinopsis -->
        <div class="col">
            <h5>sinopsis :</h5>
            <article class="my-3 sinopsis-text">
                {!! $post->body !!}
            </article>
        </div>
        <a href="/posts" class="mt-3">
            <button type="button" class="btn btn-light">Back to List Buku</button>
        </a>
    </div>
</div>





@endsection