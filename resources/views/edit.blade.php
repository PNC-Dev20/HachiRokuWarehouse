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
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                <input type="text" class="form-control" name="id_transaksi" id="id_transaksi" placeholder="ID Transaksi" value="{{ $mobil->id_transaksi }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kode_produksi">Kode Produksi</label>
                                <input type="text" class="form-control" name="kode_produksi" id="kode_produksi" placeholder="Kode Produksi" value="{{ $mobil->kode_produksi }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jenis">Jenis Mobil</label>
                                <select class="form-control" name="jenis" id="jenis">
                                    <option value="PICKUP" @if($mobil->jenis==="PICKUP" ) selected @endif>Pickup</option>
                                    <option value="COUPE" @if($mobil->jenis==="COUPE" ) selected @endif>Coupe</option>
                                    <option value="HATCHBACK" @if($mobil->jenis==="HATCHBACK" ) selected @endif>Hatchback</option>
                                    <option value="SUV" @if($mobil->jenis==="SUV" ) selected @endif>SUV</option>
                                    <option value="Sedan" @if($mobil->jenis==="Sedan" ) selected @endif>Sedan</option>
                                    <option value="MPV" @if($mobil->jenis==="MPV" ) selected @endif>MPV</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="merk">Merk</label>
                                <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="{{ $mobil->merk }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="transmisi">Transmisi</label>
                                <select class="form-control" name="transmisi" id="transmisi">
                                    <option value="AT" @if($mobil->transmisi ==="AT" ) selected @endif>Automatic (AT)</option>
                                    <option value="MT" @if($mobil->transmisi ==="MT" ) selected @endif>Manual (MT)</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="warna">Warna</label>
                                <input type="text" class="form-control" name="warna" id="warna" placeholder="Warna" value="{{ $mobil->warna }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="spesifikasi">Spesifikasi</label>
                            <textarea class="form-control" name="spesifikasi" id="spesifikasi" rows="1" placeholder="Spesifikasi">{{ $mobil->spesifikasi }}</textarea>
                        </div>
                        <div class="form-row">
                            <label for="harga">Harga (Rp)</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="{{ $mobil->harga }}">
                        </div>
                        <button type="submit" value="submit" id="send_form" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection