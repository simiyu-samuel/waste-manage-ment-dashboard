<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\WasteCollection;

class VehicleController extends Controller
{
    //
    public function index()
    {
        $vehicles = Vehicle::all();
        return  view('vehicles.index', compact('vehicles'));
    }
    public function create()
    {
        return  view('vehicles.create'); 
    }
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        Vehicle::create($request->all());
        return redirect()->route('vehicles.index');
    }
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit', compact('vehicle'));
    }
    public function show($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.show', compact('vehicle'));
    }
    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->route('vehicles.index');
    }
}
