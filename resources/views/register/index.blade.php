@extends('layouts.main')


@section('container')

<div class="row justify-content-center py-5">
    <div class="col-md-5 box-bg box-bg py-4">
        <main class="form-daftar w-100 m-auto">
            <h1 class="title-brand">BukList</h1>
            <h2 class="mt-4 text-center judul-login">Daftar</h2>
            <form action="/register" method="post">
                @csrf
                <div class="form py-2">
                    <input type="text" name="name" class="form-control bg-input-login rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name"></label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form py-2">
                    <input type="text" name="username" class="form-control bg-input-login @error('username')is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username"></label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form py-2">
                    <input type="email" name="email" class="form-control bg-input-login @error('email')is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email"></label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form py-2">
                    <input type="password" name="password" class="form-control bg-input-login rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password"></label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg tombol-login" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center text-dark mt-2">Sudah mempunyai akun? <a href="/login">Login Now!</a></small>
        </main>
    </div>
</div>



@endsection