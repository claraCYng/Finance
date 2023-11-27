<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\FinanceReport;

class FinanceReportCont extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public static function hitung_laba() {
        $data = FinanceReport::all('jumlah')->sum('jumlah');

        return response()->json([
            'status' => 'Success',
            $data,
        ],200);;
    }

    public function getAllReport()
    {
        $financeReport = FinanceReport::all();
        return response()->json([
        'status' => 'Success',
        'message' => 'semua laporan finance',
        'data' => [
        'finance report' => $financeReport,
        ]
        ],200);
    }

    public function createReport(Request $request)
    {
        $nama_transaksi = $request->nama_transaksi;
        $jumlah = $request->jumlah;
        $tanggal_transaksi = $request->tanggal_transaksi;
        $jumlah_laba = $request->jumlah_laba;
        $financeReport = FinanceReport::create([
            'nama_transaksi' => $nama_transaksi,
            'jumlah' => $jumlah,
            'tanggal_transaksi' => $tanggal_transaksi,
            'jumlah_laba' => $jumlah_laba
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => 'new data created',
            'data' => [
            'finance report' => $financeReport,
            ]
        ],200);
}
}
