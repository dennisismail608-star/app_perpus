@extends('app')
@section('title', 'Peminjaman Buku')
@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $title ?? '' }}</h3>

            <form action="" method="post">
                @csrf

                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3 row">
                            <label for="" class="form-label">No Transaksi</label>
                        </div>
                        <div class="col-sm-7 mb-3">
                            <input type="text" class="form-control" name="trans_number" value="" readonly>
                        </div>

                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3">
                            <label for="" class="form-label">Kategori Buku</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="" id="id_kategori" class="form-control">
                                <option value="">Pilih Kategori</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3">
                            <label for="" class="form-label">Buku</label>
                        </div>
                        <div class="col-sm-7">
                            <select name="" id="id_buku" class="form-control">
                                <option value="">Pilih Buku</option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
