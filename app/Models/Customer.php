<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer
 *
 * @property int $customer_id
 * @property string $first_nm
 * @property string $last_nm
 * @property string $addr_ln_1
 * @property string $addr_ln_2
 * @property string $city_nm
 * @property string $state_nm
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddrLn1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereAddrLn2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCityNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereFirstNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereLastNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereStateNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    use HasFactory;
}
