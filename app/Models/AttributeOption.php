<?php

namespace Modules\Attribute\app\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'attribute_id', 'active', 'value', 'code', 'data_type', 'order', 'description'
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }

    public function attributables()
    {
        return $this->hasMany(Attributable::class);
    }
}
