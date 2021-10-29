<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
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
 */
	class Customer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KeyControl
 *
 * @property int $key_controls_id
 * @property string $key_name
 * @property string $key_val
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl query()
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl whereKeyControlsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl whereKeyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl whereKeyVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KeyControl whereUpdatedAt($value)
 */
	class KeyControl extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaleTicket
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SaleTicket newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleTicket newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaleTicket query()
 */
	class SaleTicket extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalesDoc
 *
 * @property int $sales_doc_id
 * @property int $ticket_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc whereSalesDocId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesDoc whereUpdatedAt($value)
 */
	class SalesDoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalesInvoice
 *
 * @property int $sales_invoice_id
 * @property int $customer_id
 * @property string $invoice_dt
 * @property int $invoice_nbr
 * @property string $invoice_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereInvoiceDt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereInvoiceNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereInvoiceType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereSalesInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoice whereUpdatedAt($value)
 */
	class SalesInvoice extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SalesInvoiceDetail
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoiceDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoiceDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SalesInvoiceDetail query()
 */
	class SalesInvoiceDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VehicleBrand
 *
 * @property int $vehicle_brand_id
 * @property string $brand_nm
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand whereBrandNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleBrand whereVehicleBrandId($value)
 */
	class VehicleBrand extends \Eloquent {}
}

namespace App\Models{
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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereColorVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereCostVal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereDriverSide($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereMileageAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereModelNm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereVehicleBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereVehicleModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereVinNbr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleModel whereYearVal($value)
 */
	class VehicleModel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VehicleType
 *
 * @property int $vehicle_type_id
 * @property string $vhcl_type_nm
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType query()
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereVehicleTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VehicleType whereVhclTypeNm($value)
 */
	class VehicleType extends \Eloquent {}
}

