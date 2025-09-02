@extends('app')
@section('title', 'Category of the book')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Manage of Categories</div>
            <div>
                <div class="card-body">
                    <a href="{{ url('kategori/create') }}" class="btn btn-primary mt-2 mb-2">Create</a>
                    <div class="table table-responsive">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama kategori</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($categories as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama_kategori }}</td>
                                    <td>
                                        <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-succes">Edit</a>
                                        <form action="{{ route('kategori.destroy', $item->id) }}" method="post"
                                            style="display: inline" onclick="return confirm(yakin ingin delete ?)">
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
