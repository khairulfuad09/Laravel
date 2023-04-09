@extends('template.main')
@section('container')
    {{-- @dd($users) --}}
    <button type="button" class="btn btn-primary tombolTambahData mb-5" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data
    </button>
    <h1>Data User</h1>
    <div class="d-flex flex-direction">
        @foreach ($users as $user)
            <div class="card m-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Username : {{ $user->name }}</h5>
                    <p class="card-text">email : {{ $user->email }}</p>
                    <form action="/dashboard/{{ $user->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger"
                            onclick="return confirm('Apa Anda Yakin menghapus data ini??')">Delete</button>
                    </form>
                    <a href="/dashboard/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                </div>
            </div>
        @endforeach
    </div>

    {{ $users->links() }}
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
                <form action="/adduser" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control" id="name" placeholder="Username" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="text" class="form-control" id="password" placeholder="password"
                            name="password">
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
