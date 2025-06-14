<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyTransfer extends Model
{
    protected $fillable = [
        'from_currency_id',
        'to_currency_id',
        'amount',
        'converted_amount',
        'exchange_rate_used',
        'date',
        'description',
        'branch_id',
    ];

    public function fromCurrency()
    {
        return $this->belongsTo(Currency::class, 'from_currency_id');
    }

    public function toCurrency()
    {
        return $this->belongsTo(Currency::class, 'to_currency_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
