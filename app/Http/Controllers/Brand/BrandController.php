<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\VehicleBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{


    public function store(Request $request)
    {

//        dd($request->all());

        VehicleBrand::create([
            'brand_nm' => $request->brand_nm
        ]);

        return redirect()->route('Homepage')->with(['alert-type' => 'info', 'alert-message' => 'Brand Added Successfully']);
    }
}
