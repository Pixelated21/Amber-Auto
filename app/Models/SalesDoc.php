<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class SalesDoc extends Model
{
    use HasFactory;
}
