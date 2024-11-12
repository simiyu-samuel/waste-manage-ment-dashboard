<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Models\WasteCollection;

class WasteCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wasteCollections = WasteCollection::all();
        return view('waste-collections.index', compact('wasteCollections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vehicles = Vehicle::all();
        return view('waste-collections.create', compact('vehicles'));
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
        WasteCollection::create($request->all());
        return redirect()->route('waste-collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(WasteCollection $wasteCollection)
    {
        $vehicles = Vehicle::all();
        return view('waste-collections.edit', compact('wasteCollection', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WasteCollection $wasteCollection)
{
    $wasteCollection->update($request->all());
    return redirect()->route('waste-collections.index');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WasteCollection $wasteCollection)
    {
        $wasteCollection->delete();
        return redirect()->route('waste-collections.index');
    }
}
