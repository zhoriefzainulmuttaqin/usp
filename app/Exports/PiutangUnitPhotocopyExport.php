<?php

namespace App\Exports;

use Illuminate\View\View;
use App\Models\PiutangUnitPhotocopy;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PiutangUnitPhotocopyExport implements WithHeadings, FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    // public function collection()
    // {
    //     return PiutangUnitPhotocopy::all();
    // }

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'Jumlah Bulan Lalu',
            'Di Bayar Bulan Ini',
            'Sisa',
            'Hutang Bulan Ini',
            'Jumlah s/d Bulan Ini',
            'Keterangan',
        ];
    }

    public function view(): View
    {
        return view('admin.mod_finance.cetakpiutangunitphotocopy', [
            'piutangfc' => PiutangUnitPhotocopy::all()
        ]);
    }
}
