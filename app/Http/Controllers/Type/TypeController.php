<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\VehicleType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function store(Request $request) {

        VehicleType::create([
            'vhcl_type_nm' => $request->vhcl_type_nm
        ]);

        return redirect()->route('Homepage');
    }
}
