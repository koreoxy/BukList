@extends('layouts.main')


@section('container')

<div class="container bg-title-category mb-2">
    <div class="row">
        <div class="col-md-12">
            <h1 class="">Category Buku</h1>
        </div>
    </div>
</div>



<div class="container bg-category ">
    <div class="row">

        @foreach( $categories as $category)
        <div class="col-md-4 py-4">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0  ">
                        <h5 class="card-title text-center flex-fill p-4 fs-3 bg-image-text">{{ $category->name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>

@endsection