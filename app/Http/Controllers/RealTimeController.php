<?php

namespace App\Http\Controllers;

use App\Models\MSensor;
use App\Models\RealTime;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRealTimeRequest;
use App\Http\Requests\UpdateRealTimeRequest;

class RealTimeController extends Controller
{
    // public function bacarealtime()
    // {
    //     $data = msensor::select('date', 't_udara')
    //         ->where('date', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL 1 HOUR)'))
    //         ->orderBy('date', 'ASC')
    //         ->get();

    //     return $data;
    // }
    public function bacarealtime()
    {
        $data = MSensor::select('date', 't_udara')
            ->where('date', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL 1 HOUR)'))
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $data->pluck('date');
        $values = $data->pluck('t_udara');

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }

    public function controlcahaya()
    {
        $data = MSensor::select('date', 'cahaya')
            ->where('date', '>=', DB::raw('DATE_SUB(NOW(), INTERVAL 1 HOUR)'))
            ->orderBy('date', 'ASC')
            ->get();

        $labels = $data->pluck('date');
        $values = $data->pluck('t_udara');

        return response()->json([
            'labels' => $labels,
            'values' => $values,
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRealTimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RealTime $realTime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RealTime $realTime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRealTimeRequest $request, RealTime $realTime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RealTime $realTime)
    {
        //
    }
}
