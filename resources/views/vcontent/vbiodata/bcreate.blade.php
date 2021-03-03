@extends('vcontent.vmaincontent')


@section('starter page')
<p>Starter Page formulir</p>
@endsection

@section('bcreate')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/biodata" class="btn btn-primary">Kembali</a>
            <br />
            <br />

            <form method="post" action="/biodata/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Tempat, tanggal lahir</label>
                    <input name="ttl" class="form-control" placeholder="Tempat tanggal lahir">

                    @if($errors->has('ttl'))
                    <div class="text-danger">
                        {{ $errors->first('ttl')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>

                    @if($errors->has('alamat'))
                    <div class="text-danger">
                        {{ $errors->first('alamat')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input name="jenkel" class="form-control" placeholder="Jenis Kelamin">

                    @if($errors->has('jenkel'))
                    <div class="text-danger">
                        {{ $errors->first('jenkel')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Telp</label>
                    <input name="telp" class="form-control" placeholder="Telp">

                    @if($errors->has('telp'))
                    <div class="text-danger">
                        {{ $errors->first('telp')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
