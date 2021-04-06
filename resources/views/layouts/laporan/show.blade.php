@extends('layouts.master')
@section('css')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Lihat Kasus Local</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Kasus Local</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="container mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            Form Lihat Data Kasus Local
        </div>
        <div class="card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="nama_provinsi" class="control-label">Nama Provinsi</label>
                        <input type="text" name="nama_provinsi" id="nama_provinsi" value="{{$laporan->rw->kelurahan->kecamatan->kota->provinsi->nama_provinsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kota" class="control-label">Nama Kota</label>
                        <input type="text" name="nama_kota" id="nama_kota" value="{{$laporan->rw->kelurahan->kecamatan->kota->nama_kota}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kecamatan" class="control-label">Nama Kecamatan</label>
                        <input type="text" name="nama_kecamatan" id="nama_kecamatan" value="{{$laporan->rw->kelurahan->kecamatan->nama_kecamatan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama_kelurahan" class="control-label">Nama Kelurahan</label>
                        <input type="text" name="nama_kelurahan" id="nama_kelurahan" value="{{$laporan->rw->kelurahan->nama_kelurahan}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="nama" class="control-label">Rw</label>
                        <input type="text" name="nama" id="nama" value="{{$laporan->rw->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="positif" class="control-label">Jumlah Positif</label>
                        <input type="text" name="positif" id="positif" value="{{$laporan->positif}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sembuh" class="control-label">Jumlah Sembuh</label>
                        <input type="text" name="sembuh" id="sembuh" value="{{$laporan->sembuh}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="meninggal" class="control-label">Jumlah Meninggal</label>
                        <input type="text" name="meninggal" id="meninggal" value="{{$laporan->meninggal}}" class="form-control" readonly>
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="tanggal" class="control-label">Tanggal</label>
                        <input type="text" name="tanggal" id="tanggal" value="{{$laporan->tanggal}}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <a href="{{url()->previous()}}" class="btn btn-success"><i class="fa fa-chevron-circle-left"></i></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection