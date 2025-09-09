@extends('app')
@section('title', 'tambah user role')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Tambah User role</h3>

            <form action="{{ route('user.updateRoles', $user->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-control">Pilih role</label>
                    <select name="role[]" id="" class="form-control" multiple>
                        @foreach ($roles as $role)
                            <option {{ $user->roles->contains($role->id) ? 'selected' : '' }} value="{{ $role->id }}">
                                {{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>
                    <a href="{{ url()->previous() }}">Kembali</a>
                </div>
            </form>
        </div>
    </div>

@endsection
