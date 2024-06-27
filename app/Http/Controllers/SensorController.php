<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sensor;

class SensorController extends Controller
{

    public function index()
    {
        return view('dashboard');
    }

    public function create(Request $request, $id)
    {
        $sensor = new Sensor();
        $sensor->nama_alat = $id;
        $sensor->suhu = $id;
        $sensor->hum = $id;
        $sensor->co2 = $id;

        $sensor->save();

        return response()->json($sensor, 201);
    }
}
