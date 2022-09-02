@extends('layouts.main')


@section('container')

<div class="row justify-content-center py-5">
    <div class="col-md-4 box-bg py-4">

        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif



        <main class="form-signin w-100 menu-login">
            <h1 class="title-brand">BukList</h1>
            <h2 class="text-center py-2 judul-login">Login</h2>

            <form action="/login" method="post">
                @csrf
                <div class="form py-2">
                    <input type="email" name="email" class="form-control bg-input-login @error('email') is-invalid @enderror" id="email" placeholder="name@gmail.com" autofocus required value="{{ old('email') }}">
                    <label for="email"></label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form py-2">
                    <input type="password" name="password" class="form-control bg-input-login" id="password" placeholder="Password">
                    <label for="password"></label>
                </div>
                <button class="w-100 btn btn-lg tombol-login" type="submit">Login</button>
            </form>

            <small class="d-block text-center mt-3 text-dark">Belum Mendaftarkan akun? <a href="/register">Daftar sekarang!</a></small>
        </main>

    </div>
</div>




@endsection