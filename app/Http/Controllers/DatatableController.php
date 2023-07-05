<?php

namespace App\Http\Controllers;

use App\Models\datatable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoredatatableRequest;
use App\Http\Requests\UpdatedatatableRequest;
use App\Http\Controllers\m_sensor;
use App\Models\MSensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatatableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function datatable()
    // {
    //     $datatable = datatable::all();
    //     return view('m_sensor', compact('datatable'));

    // }

    public function index()
    {
        return view('datatable', [
            "title" => "Database",
            //Buku::all() disini digunakan untuk menampilkan semua data pada Model Buku
            "datatable" => datatable::all()
        ]);
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
    public function store(StoredatatableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(datatable $datatable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(datatable $datatable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedatatableRequest $request, datatable $datatable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(datatable $datatable)
    {
        //
    }
}
