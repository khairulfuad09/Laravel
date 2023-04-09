@extends('template.main')
@section('container')
    {{-- @dd($user) --}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Update Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/motor/{{ $car->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="plat" class="form-label">Nomor Plat</label>
                        <input type="text" class="form-control" id="plat" placeholder="Nomor plat" name="plat"
                            value="{{ old('plat', $car->plat) }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama_motor" class="form-label">nama motor</label>
                        <input type="text" class="form-control" id="nama_motor" placeholder="nama_motor"
                            name="nama_motor" value="{{ old('nama_motor', $car->nama_motor) }}">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat"
                            value="{{ $car->alamat }}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a
                        href="/motor">Close</a></button>
                <button type="submit" class="btn btn-primary">Update data</button>
            </div>
            </form>
        </div>
    </div>
@endsection
