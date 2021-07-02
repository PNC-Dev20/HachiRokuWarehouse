<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MobilController;
use App\Mobil;
use Illuminate\Http\Request;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class DashboardController extends Controller
{
    public function index()
    {
        $carLatest = Mobil::query()->latest('tgl_masuk')->get('tgl_masuk')->first();
        $carCount = Mobil::query()->count();
        $carCountPickup = Mobil::query()->where('jenis', 'PICKUP')->count();
        $carCountCoupe = Mobil::query()->where('jenis', 'COUPE')->count();
        $carCountHatchback = Mobil::query()->where('jenis', 'HATCHBACK')->count();
        $carCountSUV = Mobil::query()->where('jenis', 'SUV')->count();
        $carCountSedan = Mobil::query()->where('jenis', 'SEDAN')->count();
        $carCountMPV = Mobil::query()->where('jenis', 'MPV')->count();

        return view('dashboard.index', compact('carLatest','carCount', 'carCountPickup', 'carCountCoupe', 'carCountHatchback', 'carCountSUV', 'carCountSedan', 'carCountMPV'));
    }
}
