@extends('layouts.main')
@section('title', 'student')
@section('content')
    <div>
        @include('layouts.flasher')
    </div>
    <div class="card mt-4">
        <div class="card-header">
            <a href="/mahasiswa/formtambah" class="btn btn-primary" role="button"><i class="bi bi-plus-lg"></i> Mahasiswa</a>
            <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Minat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mhs as $idx => $s)
                    <tr>
                        <th scope="row">{{ $idx + $mhs->firstItem() }}</th>
                        <td>{{ $s->nim }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->gender }}</td>
                        <td>{{ $s->prodi }}</td>
                        <td>{{ $s->minat }}</td>
                        <td>
                            <a href="/mahasiswa/formedit/{{ $s->id }}" class="btn btn-warning" role="button"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data?')" href="/mahasiswa/delete/{{ $s->id }}" role="button"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <p>Semua Data : {{ $mhs->total() }}</p>
            <p>Data Tiap Halaman : {{ $mhs->count() }}</p>
            <p>Halaman ke : {{ $mhs->currentPage() }}</p>
            <span class="float-right">{{ $mhs->links() }}</span>
        </div>
    </div>
@endsection