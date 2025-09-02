@extends('app')
@section('title', 'Create')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Create Category</div>
        </div>
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="post">
                @csrf
                <label for="" class="fom-label">Nama kategori</label>
                <input type="text" class="form-control" name="nama_kategori">

                <button type="submit" class="btn btn-primary mt-3 mb-2">Kirim</button>
            </form>
        </div>
    </div>
@endsection
