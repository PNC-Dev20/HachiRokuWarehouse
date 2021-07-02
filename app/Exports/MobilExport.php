<?php

namespace App\Exports;

use App\Mobil;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Illuminate\Contracts\Queue\ShouldQueue;

use Excel;

// class MobilExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Mobil::all();
//     }
// }

class MobilExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    // varible form and to 
    public function __construct(String $from = null, String $to = null)
    {
        $this->from = $from;
        $this->to   = $to;
    }

    //function select data from database 
    public function collection()
    {
        return Mobil::select()->where('tgl_masuk', '>=', $this->from)->where('tgl_masuk', '<=', $this->to)->get();
    }
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
            },
        ];
    }

    //function header in excel
    public function headings(): array
    {
        return [
            'NO',
            'ID TRANSAKSI',
            'KODE PRODUKSI',
            'JENIS',
            'MERK',
            'TRANSMISI',
            'WARNA',
            'SPESIFIKASI',
            'HARGA',
            'TANGGAL MASUK',
        ];
    }
}
