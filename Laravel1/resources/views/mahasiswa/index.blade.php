@extends('template.main')
@section('container')
    {{-- @dd($cars) --}}
    @if (session()->has('success'))
        <div class="alert alert-succes alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
    </button>
    @csrf
    <h1>Daftar Motor</h1>
    <div class="d-flex flex-wrap">
        @foreach ($cars as $car)
            <div class="card m-3" style="width: 18rem;">
                <img src="img/{{ $car->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Plat : {{ $car->plat }}</h5>
                    <p class="card-text">Nama Motor : {{ $car->nama_motor }}</p>
                    <p class="card-text">Alamat : {{ $car->alamat }}</p>
                    <a href="{{ route('home.edit', $car->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('home.destroy', $car->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"
                            onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    {{ $cars->links() }}
@endsection
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="plat" class="form-label">Nomor Plat</label>
                        <input type="text" class="form-control" id="plat" placeholder="Nomor Plat"
                            name="plat">
                    </div>
                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">Nama Motor</label>
                        <input type="text" class="form-control" id="nama_motor" placeholder="Nama Motor"
                            name="nama_motor">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah data</button>
            </div>
            </form>
        </div>
    </div>
</div>
