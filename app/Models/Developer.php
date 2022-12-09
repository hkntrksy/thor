<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Developer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'level',
        'total_hour',
        'duration_by_level'
    ];

    protected $casts = [
        'total_hour' => 'float'
    ];

    /**
     * @return HasMany
     */
    public function todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }

    protected function totalWeek(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format(($this->total_hour / 45), 2),
        );
    }

}
