<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model implements \Spatie\MediaLibrary\HasMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'name',
        'description',
        'website',
        'country',
        'established_year',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
