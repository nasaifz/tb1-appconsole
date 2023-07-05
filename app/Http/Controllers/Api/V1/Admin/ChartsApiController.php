<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\MSensor;
use App\Speed;

class ChartsApiController extends Controller
{
    public function index()
    {
        MSensor::create(['speed' => rand(10, 50)]);

        $speeds = Speed::latest()->take(10)->get()->sortBy('id_data');
        $labels = $speeds->pluck('id_data');
        $data = $speeds->pluck('speed');

        return response()->json(compact('date', 't_suhu'));
    }
}
