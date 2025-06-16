<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $currencies = [
            [
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'exchange_rate' => 1.00,
                'status' => 'active',
            ],
            [
                'name' => 'Euro',
                'code' => 'EUR',
                'symbol' => '€',
                'exchange_rate' => 0.85,
                'status' => 'active',
            ],
            [
                'name' => 'British Pound',
                'code' => 'GBP',
                'symbol' => '£',
                'exchange_rate' => 0.73,
                'status' => 'active',
            ],
            [
                'name' => 'Japanese Yen',
                'code' => 'JPY',
                'symbol' => '¥',
                'exchange_rate' => 110.00,
                'status' => 'active',
            ],
            [
                'name' => 'Canadian Dollar',
                'code' => 'CAD',
                'symbol' => 'C$',
                'exchange_rate' => 1.25,
                'status' => 'active',
            ],
            [
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => 'A$',
                'exchange_rate' => 1.35,
                'status' => 'active',
            ],
            [
                'name' => 'Swiss Franc',
                'code' => 'CHF',
                'symbol' => 'Fr',
                'exchange_rate' => 0.92,
                'status' => 'active',
            ],
            [
                'name' => 'Saudi Riyal',
                'code' => 'SAR',
                'symbol' => 'ر.س',
                'exchange_rate' => 3.75,
                'status' => 'active',
            ],
            [
                'name' => 'UAE Dirham',
                'code' => 'AED',
                'symbol' => 'د.إ',
                'exchange_rate' => 3.67,
                'status' => 'active',
            ],
            [
                'name' => 'Egyptian Pound',
                'code' => 'EGP',
                'symbol' => 'ج.م',
                'exchange_rate' => 15.70,
                'status' => 'active',
            ],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}
