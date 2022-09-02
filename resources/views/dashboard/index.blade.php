@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="">Selamat datang, {{ auth()->user()->name }}</h2>
</div>


<div class="table-responsive col-lg-12 bg-my-listbuku">
    <h2>My List Buku</h2>
    <table class="table table-striped table-sm bg-table-listbuku">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tanggal Rilis</th>
                <th scope="col">Halaman</th>
                <th scope="col">Bahasa</th>
                <th scope="col">Rating</th>
                <th scope="col">Category/Genre</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>


            <tr>
                <td>no</td>
                <td>title</td>
                <td>penulis</td>
                <td>tanggal_rilis</td>
                <td>Halaman</td>
                <td>Bahasa</td>
                <td>Rating</td>
                <td>Category}</td>
                <td>
                    <form action="" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure? ')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>


        </tbody>
    </table>
</div>

@endsection