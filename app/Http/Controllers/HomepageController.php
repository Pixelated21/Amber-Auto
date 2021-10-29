<?php

namespace App\Http\Controllers;

use App\Models\VehicleBrand;
use App\Models\VehicleType;

class HomepageController extends Controller
{
    public function index()
    {

        $brands = VehicleBrand::all();

        $types = VehicleType::all();

        return view("index", compact('brands', 'types'));

    }
}
