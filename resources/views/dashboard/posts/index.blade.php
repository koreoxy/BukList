@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="bg-add-buku">Add Buku</h1>
</div>


@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-12">
    <a href="/dashboard/posts/create" class="btn btn-outline-light mb-3">Tambahkan Buku baru</a>
    <table class="table table-striped table-sm">
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

            @foreach($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->penulis }}</td>
                <td>{{ $post->tanggal_rilis }}</td>
                <td>{{ $post->halaman }}</td>
                <td>{{ $post->bahasa }}</td>
                <td>{{ $post->rating }}</td>
                <td>{{ $post->category->name }}</td>
                <td>
                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin mau delete buku? ')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>

@endsection