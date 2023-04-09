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
                <form action="/dashboard/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control" id="name" placeholder="Username" name="name"
                            value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email"
                            value="{{ old('email', $user->email) }}">
                    </div>
                    <div class="mb-3">
                        {{-- <label for="password" class="form-label">password</label> --}}
                        <input type="hidden" class="form-control" id="password" placeholder="password" name="password"
                            value="{{ $user->password }}">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a
                        href="/dashboard">Close</a></button>
                <button type="submit" class="btn btn-primary">Update data</button>
            </div>
            </form>
        </div>
    </div>
@endsection
