<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExchangeClientTransaction extends Model
{
    protected $fillable = [
        'exchange_client_id',
        'currency_id',
        'amount',
        'type',
        'date',
        'branch_id',
    ];

    public function exchangeClient()
    {
        return $this->belongsTo(ExchangeClient::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
