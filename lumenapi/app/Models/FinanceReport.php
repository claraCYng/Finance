<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceReport extends Model
{
    use HasFactory;

    protected $table = 'finance_report';

    protected $fillable = [
        'nama_transaksi',
        'jumlah',
        'tanggal_transaksi',
        'jumlah_laba'
    ];

    public static function hitung_laba($tahun)
    {
        $data = FinanceReport::where('tahun', $tahun)->get();
        $laba = 0;

        foreach ($data as $row) {
            $laba += $row->jumlah;
        }

        return $laba;
    }
}
