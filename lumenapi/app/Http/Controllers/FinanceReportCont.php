<?php

namespace App\Http\Controllers;

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
}
