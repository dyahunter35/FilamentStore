<?php

namespace App\Models;

use App\Traits\GenerateId;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Employee extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use GenerateId;

    protected $fillable = [
        'employee_id',
        'name',
        'email',
        'phone',
        'department',
        'hire_date',
        'address',
        'emergency_contact',
        'position',
        'salary',
        'contact_info',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($employee) {
            $employee->employee_id = self::generateEmpoloyeeNumber();
        });
    }
    public static function generateEmpoloyeeNumber(): string
    {
        return (new self())->generateUniqueNumber('EMP-', 'employee_id');
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'employee_branches');
    }



}
