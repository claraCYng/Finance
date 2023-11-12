<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class prodController extends Controller
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

    public function index (Request $request)
    {
     return 'Hello, from lumen! We got your request from endpoint: ' . $request->path();
    }

    public function awal()
    {
        $data['status'] = 'Success';
        $data['message'] = 'Hello, from FINANCE!';
        return (new Response($data, 201))
        ->header('Content-Type', 'application/json');
    }
     
    public function defaultProduction()
    {
        $production = Production::create([
            'nama_item' => 'Batu',
            'jumlah_item' => '10',
            'harga_item' => 'Rp10.000'
        ]);

        return response()->json([
            'status' => 'Success',
            'message' => 'default user created',
            'data' => [
            'production' => $production,
            ]
        ],200);
    }

    public function createDataProduction(Request $request)
{
    $nama_item = $request->nama_item;
    $jumlah_item = $request->jumlah_item;
    $harga_item = $request->harga_item;
    $production = Production::create([
        'nama_item' => $nama_item,
        'jumlah_item' => $jumlah_item,
        'harga_item' => $harga_item
    ]);
    return response()->json([
        'status' => 'Success',
        'message' => 'new data created',
        'data' => [
        'production' => $production,
        ]
    ],200);
}
    public function getDataProduction()
    {
        $dataProduction = Production::all();
        return response()->json([
        'status' => 'Success',
        'message' => 'sema data produksi',
        'data' => [
        'dataProduction' => $dataProduction,
        ]
        ],200);
    }


 }

