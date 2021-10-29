<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class SalesInvoice extends Model
{
    use HasFactory;
}
