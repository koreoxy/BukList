@extends('layouts.main')


@section('container')

<div class="container home-hero-section py-5">
  <div class="row">
    <div class="col-md-4 bg-text-home">
      <h1 class="text-home-start1"><b>START</b> add</h1>
      <h2 class="text-white">List</h2>
      <h2 class="text-home-start2">Your <b>BOOK</b></h2>
      <a href="/posts">
        <button type="button" class="btn btn-outline-light"><i class="bi bi-arrow-return-right"></i> Get Started</button>
      </a>
    </div>

    <div class="col-md-8 ">
      <div class="col-12 bg-image-home">
        <div class="row">

          <div class="col-md-5 bg-gambar1-home mx-3">
            <div class="gambar1">
              <img src="/img/10.jpg" class="img-fluid">
            </div>
          </div>

          <div class="col-md-3 bg-gambar2-home">
            <div class="gambar-home">
              <img src="/img/11.jpg" class="img-fluid">
            </div>
          </div>

          <div class="col-md-3 bg-gambar2-home">
            <div class="gambar-home">
              <img src="/img/1.jpg" class="img-fluid">
            </div>
          </div>

        </div>
      </div>


    </div>
  </div>
</div>

@endsection