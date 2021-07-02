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
            <li class="breadcrumb-item active" aria-current="page">Data Mobil</li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="{{route('mobil.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
<div class="main-wrapper">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Export Data Mobil</h5>
                    <form action=" {{route('mobil.excel') }}" method="POST">
                        @csrf
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="date_from">Date From</label>
                                    <input type="date" class="form-control" data-toggle="datepicker" name="from" id="from"">
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="date_to">Date To</label>
                                    <input type="date" class="form-control" data-toggle="datepicker" name="to" id="to">
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary" id="submit_change">Export</button>
                            </div>
                        </div>
                    </form>
                    <!-- <a href="{{ route('mobil.excel') }}" class="btn btn-primary" target="_blank">Export</a> -->
                    <!-- <form action="{{ route('mobil.excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <label for="from" class="col-form-label">From</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control input-sm" id="from" name="from">
                                </div>
                                <label for="from" class="col-form-label">To</label>
                                <div class="col-md-2">
                                    <input type="date" class="form-control input-sm" id="to" name="to">
                                </div>

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-sm" name="search">Search</button>

                                </div>
                            </div>
                        </div>
                    </form> -->
                </div>

                <div class="card-body">
                    <h5 class="card-title">Data Mobil</h5>
                    <p></p>
                    <table id="zero-conf" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID Trx</th>
                                <th>Kode Produksi</th>
                                <th>Jenis</th>
                                <th>Merk</th>
                                <th>Transisi</th>
                                <th>Warna</th>
                                <th>Harga</th>
                                <th>Tanggal Masuk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_mobil as $mobil)
                            <tr>
                                <th>{{$mobil->id}}</th>
                                <th>{{$mobil->id_transaksi}}</th>
                                <th>{{$mobil->kode_produksi}}</th>
                                <th>{{$mobil->jenis}}</th>
                                <th>{{$mobil->merk}}</th>
                                <th>{{$mobil->transmisi}}</th>
                                <th>{{$mobil->warna}}</th>
                                <th>{{ number_format($mobil->harga,2) }}</th>
                                <th>{{$mobil->tgl_masuk}}</th>
                                <th>
                                    <a href="{{ route('mobil.show', $mobil->id) }}" class="btn btn-info"><i class="fi-rr-eye"></i></a>
                                    <a href="{{ route('mobil.edit', $mobil->id) }}" class="btn btn-warning"><i class="fi-rr-pencil"></i></a>
                                    <a href="{{ route('mobil.delete', $mobil->id) }}" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin dihapus?')"><i class="fi-rr-trash"></i> </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop