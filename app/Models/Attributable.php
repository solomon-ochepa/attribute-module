<?php

namespace Modules\Attribute\app\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attributable extends Model
{
    use HasFactory, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'attribute_option_id', 'active', 'attributable', 'order', 'description'
    ];

    public function getAttributeAttribute()
    {
        return $this->option->attribute;
    }

    public function option()
    {
        return $this->belongsTo(AttributeOption::class, 'attribute_option_id');
    }
}
