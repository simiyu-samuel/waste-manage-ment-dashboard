<?php

namespace App\Http\Controllers;

use App\Models\WasteCollection;
use App\Models\Route;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCollections = WasteCollection::count();
        $totalRoutes = Route::count();
        $totalVehicles = Vehicle::count();

        return view('dashboard.index', compact('totalCollections', 'totalRoutes', 'totalVehicles'));
    }
}

