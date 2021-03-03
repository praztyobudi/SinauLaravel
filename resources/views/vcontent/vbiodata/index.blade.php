@extends('vcontent.vmaincontent')

@section('starter page')
<p>Daftar biodata anda</p>
@endsection

@section('index')
<div class="container">
    <div class="card mt-1">
        <div class="card-body">
            <a href="/biodata/create" class="btn btn-primary">Tambah data diri</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tempat, tanggal lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($biodata as $b)
                    <tr>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->ttl }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>{{ $b->jenkel }}</td>
                        <td>{{ $b->telp }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
