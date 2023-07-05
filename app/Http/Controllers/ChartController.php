<?php

namespace App\Http\Controllers;

use App\Models\MSensor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller

{
public function index()
{
    $data = DB::table('m_console')->select('date', 't_udara')->orderBy('waktu', 'desc')->limit(60)->get();

    // Format the data into a format that can be used by Chart.js
    $labels = [];
    $values = [];
    foreach ($data as $row) {
        $labels[] = $row->date;
        $values[] = $row->t_udara;
    }
    $chartData = [
        'labels' => array_reverse($labels),
        'datasets' => [
            [
                'label' => 'Suhu',
                'data' => array_reverse($values),
                'fill' => false,
                'borderColor' => 'rgb(75, 192, 192)',
                'lineTension' => 0.1
            ]
        ]
    ];

    return view('console', compact('chartData'));
}
}
