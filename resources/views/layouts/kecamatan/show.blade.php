@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Data Kecamatan') }}</div>

                <div class="card-body">
                    <form  action="{{route('kecamatan.index', $kecamatan->id)}}" method="post">
                        <input type="hidden" name="_method" value="GET">
                            @csrf
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Kota</label>
                            <input type="text" name="id_kota" class="form-control" 
                            value="{{$kecamatan->kota->nama_kota}}" readonly>
                    </div>

                    <div class="form-group">
                        <div class="mb-12>
                            <label for="exampleInputPassword1" class="form-label"><b>Nama Kecamatan</b></label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="nama_kecamatan"
                            value="{{$kecamatan->nama_kecamatan}}" readonly>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <button type="submit" class="float-right btn btn-success">Kembali</button>
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
