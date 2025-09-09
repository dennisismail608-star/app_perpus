@extends('app')
@section('title', 'Tambah user')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tambah user</div>
        </div>
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama *</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">email *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">password *</label>
                    <input type="password" class="form-control" name="password" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-success mt-2">Kembali</a>
            </form>
        </div>
    </div>
@endsection
