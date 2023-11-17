<?php

namespace App\Http\Controllers;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class RegulasiCont extends Controller
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
    public function defaultRegulation()
    {
        $regulasi = Regulation::create([
            'judul' => 'Gaji',
            'isi' => 'lorem ipsum',
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => 'default regulation created',
            'data' => [
            'regulasi' => $regulasi,
            ]
        ],200);
    }
    public function createRegulation(Request $request)
    {
        $judul = $request->judul;
        $isi = $request->isi;
        $regulasi = Regulation::create([
            'judul' => $judul,
            'isi' => $isi,
        ]);
        return response()->json([
            'status' => 'Success',
            'message' => 'new regulation created',
            'data' => [
                'regulasi' => $regulasi,
            ]
        ],200);
    }
    public function getRegulation()
    {
        $regulation = Regulation::all();
        return response()->json([
            'status' => 'Success',
            'message' => 'all users grabbed',
            'data' => [
            'regulation' => $regulation,
            ]
        ],200);
    }
    
    //
}
