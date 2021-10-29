<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\VehicleBrand
 *
 * @property int $vehicle_brand_id
 * @property string $brand_nm
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|VehicleBrand newModelQuery()
 * @method static Builder|VehicleBrand newQuery()
 * @method static Builder|VehicleBrand query()
 * @method static Builder|VehicleBrand whereBrandNm($value)
 * @method static Builder|VehicleBrand whereCreatedAt($value)
 * @method static Builder|VehicleBrand whereUpdatedAt($value)
 * @method static Builder|VehicleBrand whereVehicleBrandId($value)
 * @mixin Eloquent
 */
class VehicleBrand extends Model
{
    protected $fillable = [
        'brand_nm'
    ];

    use HasFactory;
}
