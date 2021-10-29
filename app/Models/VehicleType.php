<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\VehicleType
 *
 * @property int $vehicle_type_id
 * @property string $vhcl_type_nm
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|VehicleType newModelQuery()
 * @method static Builder|VehicleType newQuery()
 * @method static Builder|VehicleType query()
 * @method static Builder|VehicleType whereCreatedAt($value)
 * @method static Builder|VehicleType whereUpdatedAt($value)
 * @method static Builder|VehicleType whereVehicleTypeId($value)
 * @method static Builder|VehicleType whereVhclTypeNm($value)
 * @mixin Eloquent
 */
class VehicleType extends Model
{
    protected $fillable = [
        'vhcl_type_nm'
    ];
    use HasFactory;
}
