<?php

namespace App\Http\Controllers;

use App\Exports\MobilExport;
use App\Mobil;
use Illuminate\Http\Request;
use Excel;

class MobilController extends Controller
{
    //page-dataBarang
    public function index(Request $request)
    {

        $data_mobil = Mobil::all();
        return view('dataMobil.index', compact('data_mobil'));
    }

    //untuk ke form-create
    public function create(Request $request)
    {
        return view('create');
    }

    //simpan data di form create
    public function store(Request $request)
    {
        $request->validate([
            'kode_produksi' => 'required|max:10',
            'jenis' => 'required',
            'merk' => 'required',
            'transmisi' => 'required',
            'warna' => 'required',
            'spesifikasi' => 'required',
            'harga' => 'required'
        ]);

        Mobil::create($request->all());
        return back()->with([
            'status' => 'success',
            'message' => 'Data mobil berhasil ditambah'
        ]);
    }

    //page form-edit
    public function update(Request $request, $id)
    {

        $request->validate([
            'kode_produksi' => 'required|max:10',
            'jenis' => 'required',
            'merk' => 'required',
            'transmisi' => 'required',
            'warna' => 'required',
            'spesifikasi' => 'required',
            'harga' => 'required'
        ]);

        $mobil = Mobil::query()->findOrFail($id);
        $mobil->id = $request->id;
        $mobil->kode_produksi = $request->kode_produksi;
        $mobil->jenis = $request->jenis;
        $mobil->merk = $request->merk;
        $mobil->transmisi = $request->transmisi;
        $mobil->warna = $request->warna;
        $mobil->spesifikasi = $request->spesifikasi;
        $mobil->harga = $request->harga;

        $mobil->save();

        return back()->with([
            'status' => 'success',
            'message' => 'Data Mobil berhasil diubah'
        ]);
    }

    //simpan data form-edit
    public function edit($id)
    {
        $mobil = Mobil::query()->findOrFail($id);
        return view('edit', compact('mobil'));

        return back()->with([
            'status' => 'success',
            'message' => 'Data mobil berhasil diubah'
        ]);
    }

    //page-show
    public function show($id)
    {
        $mobil = Mobil::query()->findOrFail($id);
        return view('show', compact('mobil'));
    }

    // //delete
    public function delete($id)
    {
        Mobil::query()->where('id', $id)->delete();

        return back()->with([
            'status' => 'success',
            'message' => 'Siswa berhasil dihapus'
        ]);
    }

    //export excel
    // public function exportExcel()
    // {
    //     return Excel::download(new MobilExport, 'mobil.xlsx');
    // }

    public function exportExcel(Request $req)
    {

        $from = $req->input('from');
        $to   = $req->input('to');
        // select Excel
        return Excel::download(new MobilExport($from, $to), 'Excel-reports.xlsx');
    }
}
