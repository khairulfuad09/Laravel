@extends('template.main')
@section('container')
    {{-- @dd($users) --}}

    <h1>Data User</h1>
    <div class="d-flex flex-direction">
        @foreach ($cars as $user)
            <div class="card m-3" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nomor Plat : {{ $user->plat }}</h5>
                    <p class="card-text">Nama Motor : {{ $user->nama_motor }}</p>
                    <p class="card-text">alamat : {{ $user->alamat }}</p>
                </div>
            </div>
        @endforeach
    </div>

    {{ $cars->links() }}
@endsection
