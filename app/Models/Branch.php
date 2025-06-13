<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Tenant;
use Filament\Models\Concerns\BelongsToTenant;

class Branch extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'location',
        // Add other branch specific fields here later
    ];

    public static function getTenantModel(): string
    {
        return static::class;
    }

    public function getTenantIdentifierName(): string
    {
        return 'id'; // Or the column name you use for the tenant identifier
    }

    public function getTenantOwnershipRelationshipName(): string
    {
        return 'branch'; // The name of the relationship on the User model
    }

    public function members()
    {
        return $this->belongsToMany(User::class, 'branch_user', 'branch_id', 'user_id');
    }
}
