<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class ProductUnit extends Model
{

    use HasTranslations;

    public array $translatable = ['name'];

    protected $fillable = [
        'name',
        'symbol',
        'abbreviation',
        'type',
        'description',
        'base_unit',
        'conversion_factor',
        'status'
    ];

    protected $casts = [
        'base_unit' => 'boolean',
        'conversion_factor' => 'decimal:4'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'unit_id');
    }
}
