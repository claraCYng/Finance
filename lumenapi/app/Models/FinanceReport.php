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
}