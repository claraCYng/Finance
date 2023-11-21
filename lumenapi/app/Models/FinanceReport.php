<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'jumlah',
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
