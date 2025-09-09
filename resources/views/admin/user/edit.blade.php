@extends('app')
@section('title', 'Edit user')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit user</div>
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $edit->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" value="{{ $edit->email }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">password</label>
                    <input type="password" class="form-control" name="password">
                    <span class="text-muted">
                        <small>
                            )* Silahkan diisi jika ingin ubah password
                        </small>
                    </span>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-success">Kembali</a>

            </form>
        </div>
    </div>
    </div>
@endsection
