@extends('vcontent.vmaincontent')

@section('starter page')
<p>Daftar biodata anda</p>
@endsection

@section('index')
<div class="container">
    <div class="card mt-1">
        <div class="card-body">
            <a href="{{url('/biodata/create')}}" class="btn btn-primary">Tambah data diri</a>
            <br />
            <br />
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th>Nama</th>
                        <th>Tempat, tanggal lahir</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th width="40px" class="text-center">Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no=1
                    @endphp
                    @foreach($biodata as $b)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->ttl }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>{{ $b->jenkel }}</td>
                        <td>{{ $b->telp }}</td>
                        <td>
                            <a href="/biodata/edit/{{$b->id}}" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('delete')
                            <a href="/biodata/hapus/{{$b->id}}" onclick="return confirm('Yakin di Hapus?')"
                                class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
