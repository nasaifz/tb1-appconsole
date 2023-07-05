<?php

namespace App\Http\Controllers;

use App\Models\CData;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreCDataRequest;
use App\Http\Requests\UpdateCDataRequest;

class CDataController extends Controller
{

    public function edit($id)
    {
        $cdata = CData::findOrFail($id);

        return view('editparameter', compact('cdata'));
    }

    public function update(Request $request, $id)
    {
        $cdata = CData::findOrFail($id);

        $cdata->update($request->all());

        return redirect()->back()->with('success', 'Data updated successfully');
    }

    public function c_light()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_light', ['cdata' => $sensor ]);
    }

    public function c_lightoff()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_lightoff', ['cdata' => $sensor]);
    }

    public function c_pump()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_pump', ['cdata' => $sensor]);
    }
    public function c_pumpoff()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_pumpoff', ['cdata' => $sensor ]);
    }

    public function c_atomizer()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_atomizer', ['cdata' => $sensor]);
    }

    public function c_atomizeroff()
    {

        $sensor = CData::select('*')->get();
        return view('cdata\c_atomizeroff', ['cdata' => $sensor]);
    }





}
