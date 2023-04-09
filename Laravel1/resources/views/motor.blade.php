@extends('template.main')
@section('container')
    {{-- @dd($cars) --}}
    <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
    </button>
    <h1>Data User</h1>
    <div class="d-flex flex-direction">
        @foreach ($cars as $car)
            <div class="card m-3" style="width: 18rem;">
                <img src="img/{{ $car->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nomor Plat : {{ $car->plat }}</h5>
                    <p class="card-text">Nama Motor : {{ $car->nama_motor }}</p>
                    <p class="card-text">alamat : {{ $car->alamat }}</p>
                    <form action="/motor/{{ $car->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"
                            onclick="return confirm('Apa Anda Yakin menghapus data ini??')">Delete</button>
                    </form>
                    <a href="/motor/{{ $car->id }}/edit" class="btn btn-primary">Edit</a>
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
                <form action="/motor" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="plat" class="form-label">plat</label>
                        <input type="text" class="form-control" id="plat" placeholder="Nomor Plat"
                            name="plat">
                    </div>
                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">Nama Motor</label>
                        <input type="text" class="form-control" id="nama_motor" placeholder="nama_motor"
                            name="nama_motor">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input type="file" class="form-control" id="image" placeholder="image" name="image">
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
