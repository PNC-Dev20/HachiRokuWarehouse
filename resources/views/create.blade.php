@extends('layouts.master')
@section('active-sidebar')
<div class="page-sidebar-inner slimscroll">
    <ul class="accordion-menu">
        <li class="sidebar-title">
            86
        </li>
        <li>
            <a href="{{route('dashboard.index')}}"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
        </li>
        <li class="active-page">
            <a href="{{route('mobil.index')}}" class="active"><i class="material-icons-outlined">inbox</i>Data Mobil</a>
        </li>
    </ul>
</div>
@stop

@section('content')
<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">86</a></li>
            <li class="breadcrumb-item"><a href="#">Data Mobil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="{{route('mobil.index')}}" class="btn btn-primary">Kembali</a>
    </div>
</div>
<div class="main-wrapper">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Mobil</h5>
                    <p></p>
                    @if(session('status'))
                    <div class="alert alert-{{session('status')}}" role="alert">
                        {{session('message')}}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('mobil.store') }}" id="mobil_form" method="POST" action="javascript:void(0)" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="id_transaksi">ID Transaksi</label>
                                <input type="text" class="form-control" name="id_transaksi" id="id_transaksi" placeholder="ID Transaksi" value="{{ old('id_transaksi') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kode_produksi">Kode Produksi</label>
                                <input type="text" class="form-control" name="kode_produksi" id="kode_produksi" placeholder="Kode Produksi" value="{{ old('kode_produksi') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis">Jenis Mobil</label>
                                <select class="form-control" name="jenis" id="jenis">
                                    <option value="PICKUP" @if(old('jenis')==="PICKUP" ) selected @endif>Pickup</option>
                                    <option value="COUPE" @if(old('jenis')==="COUPE" ) selected @endif>Coupe</option>
                                    <option value="HATCHBACK" @if(old('jenis')==="HATCHBACK" ) selected @endif>Hatchback</option>
                                    <option value="SUV" @if(old('jenis')==="SUV" ) selected @endif>SUV</option>
                                    <option value="Sedan" @if(old('jenis')==="Sedan" ) selected @endif>Sedan</option>
                                    <option value="MPV" @if(old('jenis')==="MPV" ) selected @endif>MPV</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="{{ old('merk') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transmisi">Transmisi</label>
                                <select class="form-control" name="transmisi" id="transmisi">
                                    <option value="AT" @if(old('transmisi')==="AT" ) selected @endif>Automatic (AT)</option>
                                    <option value="MT" @if(old('transmisi')==="MT" ) selected @endif>Manual (MT)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" value="{{ old('warna') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="spesifikasi">Spesifikasi</label>
                                <textarea class="form-control" name="spesifikasi" id="spesifikasi" rows="1" placeholder="Spesifikasi">{{ old('spesifikasi') }}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="harga">Harga (Rp)</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="{{ old('harga') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" value="submit" id="send_form" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop