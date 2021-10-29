<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\VehicleModel
 *
 * @property int $vehicle_model_id
 * @property string $model_nm
 * @property int $vin_nbr
 * @property string $driver_side
 * @property int $mileage_amt
 * @property string $color_val
 * @property string $year_val
 * @property int $vehicle_brand_id
 * @property int $cost_val
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|VehicleModel newModelQuery()
 * @method static Builder|VehicleModel newQuery()
 * @method static Builder|VehicleModel query()
 * @method static Builder|VehicleModel whereColorVal($value)
 * @method static Builder|VehicleModel whereCostVal($value)
 * @method static Builder|VehicleModel whereCreatedAt($value)
 * @method static Builder|VehicleModel whereDriverSide($value)
 * @method static Builder|VehicleModel whereMileageAmt($value)
 * @method static Builder|VehicleModel whereModelNm($value)
 * @method static Builder|VehicleModel whereUpdatedAt($value)
 * @method static Builder|VehicleModel whereVehicleBrandId($value)
 * @method static Builder|VehicleModel whereVehicleModelId($value)
 * @method static Builder|VehicleModel whereVinNbr($value)
 * @method static Builder|VehicleModel whereYearVal($value)
 * @mixin Eloquent
 * @property int $vehicle_type_id
 * @method static Builder|VehicleModel whereVehicleTypeId($value)
 */
class VehicleModel extends Model
{
    protected $fillable = [
        'model_nm',
        'cost_val',
        'vehicle_brand_id',
        'year_val',
        'color_val',
        'mileage_amt',
        'driver_side',
        'vin_nbr',
        'vehicle_type_id',
        'vehicle_model_id',
    ];
    use HasFactory;
}
