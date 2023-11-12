<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
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

    public function getAllMaintenances() {
        $maintenances = Maintenance::all();

        return response()->json([
            'success' => true,
            'message' => 'Mendapat semua data berhasil',
            'data' => $maintenances,
        ]);
    }

    public function getMaintenanceById(Request $request) {
        $maintenance = Maintenance::findOrFail($request->id);

        return response()->json([
            'success' => true,
            'message' => "Mendapat data dari id $request->id berhasil",
            'data' => $maintenance,
        ]);
    }

    public function createMaintenance(Request $request) {
        $maintenance = Maintenance::create([
            'datetime' => $request->datetime,
            'day_duration' => $request->day_duration,
            'cost' => $request->cost,
        ]);

        return response()->json([
            'success' => true,
            'message'=> 'Membuat data maintenance baru berhasil',
            'data' => $maintenance,
        ]);
    }

    public function updateMaintenance(Request $request) {
        $maintenance = Maintenance::findOrFail($request->id);

        $maintenance->update([
            'datetime'=> $request->datetime,
            'day_duration'=> $request->day_duration,
            'cost'=> $request->cost,
        ]);

        return response()->json([
            'success'=> true,
            'message'=> 'Memperbarui satu data berhasil',
            'data'=> $maintenance,
        ]);
    }

    public function deleteMaintenance(Request $request) {
        $maintenance = Maintenance::findOrFail($request->id);

        $maintenance->delete();

        return response()->json([
            'success'=> true,
            'message'=> "Menghapus data dengan id $request->id berhasil",
        ]);
    }
}
