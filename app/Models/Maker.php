<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Maker
 *
 * @property int $id
 * @property string $name
 * @property string|null $country
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\MakerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Maker newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Maker newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Maker query()
 * @method static \Illuminate\Database\Eloquent\Builder|Maker whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maker whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maker whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maker whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Maker whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Maker extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'country'];
}
