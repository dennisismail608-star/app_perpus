@extends('app')
@section('title', 'Edit')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Category</div>
        </div>
        <div class="card-body">
            <div>
                <ul style="background-color: red">
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
            <form action="{{ route('kategori.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
                <label for="" class="fom-label">Nama kategori</label>
                <input type="text" class="form-control" name="nama_kategori" value="{{ $category->nama_kategori }}">

                <button type="submit" class="btn btn-primary mt-3 mb-2">Kirim</button>
            </form>
        </div>
    </div>
@endsection
