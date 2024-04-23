<?php

namespace App\Exports;

use App\Models\Sale;
use App\Models\Detail;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SaleExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $sales = Sale::all();
        $details = Detail::all();

        $datas = [];
        foreach ($sales as $sale) {
            foreach ($details as $detail) {
                if ($sale->id ==  $detail->salesid) {
                    $datas[] = [
                        $sale->customer->name,
                        $sale->customer->address,
                        $sale->customer->no_hp,
                        $detail->product->name,
                        $detail->product->price,
                        $detail->jumlah,
                        $detail->product->price * $detail->jumlah,
                        $sale->sale_date
                    ];
                }
            }
        }
        return  collect($datas);
    }

    public function headings(): array
    {
        return [
            'Nama Customer',
            'Alamat',
            'No HP',
            'Nama Produk',
            'Harga Satuan',
            'Jumlah',
            'Total Harga',
            'Tanggal Penjualan'
        ];
    }
}