@extends('app')
@section('title', 'book')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Books</div>
            <div>
                <div class="card-body">
                    <a href="{{ url('buku/create') }}" class="btn btn-primary mt-2 mb-2">Create</a>
                    <div class="table table-responsive">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>No</th>
                                <th>Lokasi</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Tahun Penerbit</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($books as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->id_lokasi }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->pengarang }}</td>
                                    <td>{{ $item->penerbit }}</td>
                                    <td>{{ $item->tahun_terbit }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>
                                        <a href="{{ url('buku.update') }}" class="btn btn-success">Edit</a>
                                        <form action="{{ url('buku.destroy') }}" method="post" style="display: inline"
                                            onclick="return confirm('yakin ingin delete ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
