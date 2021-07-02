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
            <li class="breadcrumb-item active" aria-current="page">Show</li>
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
                    <form action="{{ route('mobil.update',$mobil->id) }}" id="mobil_form" method="POST" action="javascript:void(0)" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method("PATCH")
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="id_transaksi">ID Transaksi</label>
                                <p>{{ $mobil->id_transaksi }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kode_produksi">Kode Produksi</label>
                                <p>{{ $mobil->kode_produksi }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis">Jenis Mobil</label>
                                <p>{{ $mobil->jenis }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="merk">Merk</label>
                                <p>{{ $mobil->merk }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transmisi">Transmisi</label>
                                <p>{{ $mobil->transmisi }}</p>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="warna">Warna</label>
                                <p>{{ $mobil->warna }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="spesifikasi">Spesifikasi</label>
                                <p>{{ $mobil->spesifikasi }}</p>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="harga">Harga (Rp)</label>
                                <p>{{ number_format($mobil->harga,2) }}</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection