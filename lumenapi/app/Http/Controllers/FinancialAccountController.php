<?php

namespace App\Http\Controllers;

use App\Models\FinancialAccount;
use Illuminate\Http\Request;

class FinancialAccountController extends Controller
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

    public function getAllAccount()
    {
        $financial_account = FinancialAccount::all();

        return response()->json([
            'success' => true,
            'message' => 'Semua akun berhasil ditampilkan',
            'data' => $financial_account,
        ]);
    }

    public function getAccountById(Request $request)
    {
        $financial_account = FinancialAccount::findOrFail($request->id);

        return response()->json([
            'success' => true,
            'message' => "Berhasil menampilkan data akun dengan id $request->id",
            'data' => $financial_account,
        ]);
    }

    public function createAccount(Request $request)
    {
        $financial_account = FinancialAccount::create([
            'nama_akun' => $request->nama_akun,
            'no_akun' => $request->no_akun,
            'nama_pemilik' => $request->nama_pemilik,
            'tgl_pembuatan' => $request->tgl_pembuatan,
            'jenis_akun' => $request->jenis_akun,
            'status_akun' => $request->status_akun,
            'saldo' => $request->saldo
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat akun keuangan baru',
            'data' => $financial_account,
        ]);
    }

    public function updateAccount(Request $request)
    {
        $financial_account = FinancialAccount::findOrFail($request->id);

        $financial_account->update([
            'nama_akun' => $request->nama_akun,
            'no_akun' => $request->no_akun,
            'nama_pemilik' => $request->nama_pemilik,
            'tgl_pembuatan' => $request->tgl_pembuatan,
            'jenis_akun' => $request->jenis_akun,
            'status_akun' => $request->status_akun,
            'saldo' => $request->saldo
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data akun berhasil ter-update',
            'data' => $financial_account,
        ]);
    }

    public function deleteAccount(Request $request)
    {
        $financial_account = FinancialAccount::findOrFail($request->id);

        $financial_account->delete();

        return response()->json([
            'success' => true,
            'message' => "Menghapus akun dengan id $request->id",
        ]);
    }
}
