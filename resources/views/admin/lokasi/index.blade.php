@extends('app')
@section('title', 'Location of the book')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Manage of Location's Books</div>
            <div>
                <div class="card-body">
                    <a href="{{ url('lokasi/create') }}" class="btn btn-primary mt-2 mb-2">Create</a>
                    <div class="table table-responsive">
                        <table class="table table-bordered text-center">
                            <tr>
                                <th>No</th>
                                <th>Kode_lokasi</th>
                                <th>Label</th>
                                <th>Rak</th>
                                <th>Action</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($locations as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->kode_lokasi }}</td>
                                    <td>{{ $item->label }}</td>
                                    <td>{{ $item->rak }}</td>
                                    <td>
                                        <a href="{{ route('lokasi.edit', $item->id) }}" class="btn btn-succes">Edit</a>
                                        <form action="{{ route('lokasi.destroy', $item->id) }}" method="post"
                                            style="display: inline" onclick="return confirm('yakin ingin delete ?')">
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
