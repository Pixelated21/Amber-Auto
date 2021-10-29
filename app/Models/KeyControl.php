<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 * @mixin \Eloquent
 */
class KeyControl extends Model
{
    use HasFactory;
}
