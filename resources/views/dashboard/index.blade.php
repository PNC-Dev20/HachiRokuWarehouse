@extends('layouts.master')
@section('active-sidebar')
<div class="page-sidebar-inner slimscroll">
    <ul class="accordion-menu">
        <li class="sidebar-title">
            86
        </li>
        <li class="active-page">
            <a href="{{route('dashboard.index')}}" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
        </li>
        <li>
            <a href="{{route('mobil.index')}}"><i class="material-icons-outlined">inbox</i>Data Mobil</a>
        </li>
    </ul>
</div>
@stop

@section('content')
<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">86</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    <div class="page-options">
        <a href="{{route('mobil.create')}}" class="btn btn-primary">Tambah Data</a>
    </div>
</div>
<div class="main-wrapper">

    <div class="card-body">
        <h5 class="card-title">DATA STOCK MOBIL</h5>
    </div>

    <div class="row stats-row">
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountPickup }}</h5>
                        <p class="stats-text">Mobil Pickup</p>
                    </div>
                    <div class="stats-icon  change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountCoupe }}</h5>
                        <p class="stats-text">Mobil Coupe</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountHatchback }}</h5>
                        <p class="stats-text">Mobil Hatchback</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountSUV }}</h5>
                        <p class="stats-text">Mobil SUV</p>
                    </div>
                    <div class="stats-icon  change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountSedan }}</h5>
                        <p class="stats-text">Mobil Sedan</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCountMPV }}</h5>
                        <p class="stats-text">Mobil MPV</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            time_to_leave
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ $carCount }}</h5>
                        <p class="stats-text">Total Mobil</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            functions
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{ date('d-m-Y H:i', strtotime($carLatest->tgl_masuk)) }}</h5>
                        <p class="stats-text">Terakhir Masuk (GMT+7)</p>
                    </div>
                    <div class="stats-icon change-success">
                        <span class="material-icons-outlined">
                            login
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row stats-row">
        ////
    </div>
</div>
@stop