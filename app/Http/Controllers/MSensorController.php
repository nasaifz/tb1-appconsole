<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\MSensor;
use illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMSensorRequest;
use App\Http\Requests\UpdateMSensorRequest;


class MSensorController extends Controller
{
    public function bacasuhu()
    {
        $sensor = MSensor::orderBy('id_data', 'DESC') -> limit(1)-> get();
        return view('sensor\bacasuhu', ['nilaisensor' => $sensor ]);
    }

    public function bacakelembaban()
    {
        $sensor = MSensor::orderBy('id_data', 'DESC') -> limit(1) -> get();
        return view('sensor\bacakelembaban', ['nilaisensor' => $sensor]);
    }

    public function bacacahaya()
    {
        $sensor = MSensor::orderBy('id_data', 'DESC') -> limit(1) -> get();
        return view('sensor\bacacahaya', ['nilaisensor' => $sensor]);
    }

    public function bacatakar1()
    {
        $sensor = MSensor::orderBy('id_data', 'DESC') -> limit(1) -> get();
        return view('sensor\bacatakar1', ['nilaisensor' => $sensor]);
    }

    public function bacatanggal()
    {
        $sensor = MSensor::orderBy('id_data', 'DESC') -> limit(1) -> get();
        return view('sensor\bacatanggal', ['nilaisensor' => $sensor]);
    }

    // public function datasuhu()
    // {
    //     $data = DB::table('m_sensors')->get();
    //     return view('my_view', ['data' => $data]);

    //     return view('sensor\datasuhu', ['nilaisensor' => $sensor]);
    // }

    // public function barchart(Request $request)
    // {
    //     $date = MSensor::orderBy('id_data', 'DESC') -> limit(60) -> get();
    //     $t_udara = MSensor::orderBy('id_data', 'DESC') -> limit(60) -> get();
    //     return view('barchart',compact('laptop_count','phone_count','desktop_count'));
    // }

    public function datasuhu()
    {
        $data = MSensor::where('date', '>=', now()->subHours(60))->get();
        $formattedData = $data->map(function ($item) {
            return [
                'x' => $item->date,
                'y' => $item->t_akar1,
            ];
        });
        return response()->json($formattedData);
    }

    // public function index()
    // {
    //     //
    // }
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
    public function store(StoreMSensorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MSensor $mSensor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MSensor $mSensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMSensorRequest $request, MSensor $mSensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MSensor $mSensor)
    {
        //
    }
}
