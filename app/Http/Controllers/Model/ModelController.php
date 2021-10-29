<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function store(Request $request)
    {

//        dd($request->all());

        VehicleModel::create([
            'model_nm' => $request->model_nm,
            'vin_nbr' => $request->vin_nbr,
            'driver_side' => $request->driver_side,
            'mileage_amt' => $request->mileage,
            'color_val' => $request->color,
            'year_val' => $request->year,
            'vehicle_brand_id' => $request->brand_id,
            'vehicle_type_id' => $request->type_id,
            'cost_val' => $request->price,
        ]);

        return redirect()->route('Homepage');
    }
}
