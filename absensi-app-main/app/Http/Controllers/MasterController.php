<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ProblemController;
use App\Models\Permission;
use App\Models\Presence;
use App\Models\Problem;
use App\Models\RProblem;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        // Ambil maksimal 10 data Problem yang memiliki status 'On Progress' atau 'Pending'
        $problems = Problem::whereIn('status', ['On Progress', 'Pending', 'OK'])
            ->take(100)
            ->get();

        // Inisialisasi variabel untuk menyimpan data berdasarkan type
        $manCount = $machineCount = $materialCount = $methodCount = 0;

        // Loop through problems to count each type
        foreach ($problems as $problem) {
            switch ($problem->type) {
                case 'Man':
                    $manCount++;
                    break;
                case 'Machine':
                    $machineCount++;
                    break;
                case 'Material':
                    $materialCount++;
                    break;
                case 'Method':
                    $methodCount++;
                    break;
            }
        }

        // Total jumlah data yang diambil
        $totalData = count($problems);

        // Set percentages to zero if no data is available
        $manPercentage = $totalData > 0 ? ($manCount / $totalData) * 100 : 0;
        $machinePercentage = $totalData > 0 ? ($machineCount / $totalData) * 100 : 0;
        $materialPercentage = $totalData > 0 ? ($materialCount / $totalData) * 100 : 0;
        $methodPercentage = $totalData > 0 ? ($methodCount / $totalData) * 100 : 0;


        // Tampilkan data dalam format yang sesuai dengan grafik bar
        $xValues = ["MAN", "MATERIAL", "MACHINE", "METHOD"];
        $yValues = [$manPercentage, $materialPercentage, $machinePercentage, $methodPercentage];
        $barColors = ["grey", "grey", "grey", "grey"];


        $permissions = Permission::whereDate('permission_date', now()->format('Y-m-d'))->get();
        $presences = Presence::whereDate('presence_date', now()->format('Y-m-d'))->get();
        // dd($presences);
        $permissions1 = Permission::all();
        $presences1 = Presence::all();
        $problem1 = RProblem::all();
        if ($problems->isEmpty()) {
            session()->flash('message', 'Tidak ada Problems!');
        }
        return view('master.dashboard', compact('problems', 'permissions', 'presences', 'presences1', 'xValues', 'yValues', 'barColors', 'problem1'));
    }
}
