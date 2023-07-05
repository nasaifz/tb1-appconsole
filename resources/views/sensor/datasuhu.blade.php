<?php
    foreach ($nilaisensor as $data) {
        echo $data->t_udara;
        echo $data->date;
        // echo $data->date->format('Y-m-d H:i:s');
    }

//     $data = $this->bacarealtime();

// $formattedData = [];

// foreach ($nilaisensor as $data) {
//     $formattedData[] = [
//         'x' => $data->date->format('Y-m-d H:i:s'),
//         'y' => $data->t_suhu,
//     ];
// }

// return response()->json($formattedData);

