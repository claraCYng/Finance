<?php

namespace App\Http\Controllers;
use Request;

class FinanceRegulasiCont extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function defaultRegulasi()
    {
        $regulasi = Regulation::create([
            'judul' => 'Penggajian',
            'isi' => 'lorem ipsum'
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'ini default',
            'data' => [
            'regulasi' => $regulasi,
            ]
        ],200);
    }

    public function createRegulasi(Request $request){
        $judul = $request->judul_reg;
        $isi = $request->isi;
        $regulasi = Regulation::create([
            'judul' => $judul,
            'isi' => $isi
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => 'new data created',
            'data' => [
            'regulasi' => $regulasi,
            ]
        ],200);
    }

    public function getRegulasi()
    {
        $dataRegulasi = Regulation::all();
        return response()->json([
        'status' => 'Success',
        'message' => 'semua regulasi',
        'data' => [
        'dataRegulasi' => $dataRegulasi,
        ]
        ],200);
    }

    //
}
