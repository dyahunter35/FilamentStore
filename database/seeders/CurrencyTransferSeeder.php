<?php

namespace Database\Seeders;

use App\Models\CurrencyTransfer;
use Illuminate\Database\Seeder;

class CurrencyTransferSeeder extends Seeder
{
    public function run(): void
    {
        $transfers = [
            [
                'from_currency_id' => 1, // USD
                'to_currency_id' => 2, // EUR
                'amount' => 10000.00,
                'exchange_rate' => 0.85,
                'converted_amount' => 8500.00,
                'reference' => 'TRF-2024-001',
                'notes' => 'Monthly EUR conversion for European operations',
                'status' => 'completed',
                'created_at' => '2024-01-15 10:30:00',
                'updated_at' => '2024-01-15 10:35:00',
            ],
            [
                'from_currency_id' => 1, // USD
                'to_currency_id' => 8, // SAR
                'amount' => 5000.00,
                'exchange_rate' => 3.75,
                'converted_amount' => 18750.00,
                'reference' => 'TRF-2024-002',
                'notes' => 'Saudi Arabia business expansion fund',
                'status' => 'completed',
                'created_at' => '2024-01-20 14:15:00',
                'updated_at' => '2024-01-20 14:20:00',
            ],
            [
                'from_currency_id' => 2, // EUR
                'to_currency_id' => 3, // GBP
                'amount' => 7500.00,
                'exchange_rate' => 0.86,
                'converted_amount' => 6450.00,
                'reference' => 'TRF-2024-003',
                'notes' => 'UK office operational expenses',
                'status' => 'completed',
                'created_at' => '2024-01-25 09:45:00',
                'updated_at' => '2024-01-25 09:50:00',
            ],
            [
                'from_currency_id' => 1, // USD
                'to_currency_id' => 9, // AED
                'amount' => 15000.00,
                'exchange_rate' => 3.67,
                'converted_amount' => 55050.00,
                'reference' => 'TRF-2024-004',
                'notes' => 'UAE investment project funding',
                'status' => 'pending',
                'created_at' => '2024-02-01 11:20:00',
                'updated_at' => '2024-02-01 11:20:00',
            ],
            [
                'from_currency_id' => 8, // SAR
                'to_currency_id' => 1, // USD
                'amount' => 37500.00,
                'exchange_rate' => 0.27,
                'converted_amount' => 10125.00,
                'reference' => 'TRF-2024-005',
                'notes' => 'Repatriation of Saudi profits',
                'status' => 'completed',
                'created_at' => '2024-02-05 16:30:00',
                'updated_at' => '2024-02-05 16:35:00',
            ],
            [
                'from_currency_id' => 4, // JPY
                'to_currency_id' => 1, // USD
                'amount' => 1100000.00,
                'exchange_rate' => 0.0091,
                'converted_amount' => 10010.00,
                'reference' => 'TRF-2024-006',
                'notes' => 'Japanese subsidiary quarterly transfer',
                'status' => 'completed',
                'created_at' => '2024-02-08 08:15:00',
                'updated_at' => '2024-02-08 08:20:00',
            ],
            [
                'from_currency_id' => 1, // USD
                'to_currency_id' => 5, // CAD
                'amount' => 8000.00,
                'exchange_rate' => 1.25,
                'converted_amount' => 10000.00,
                'reference' => 'TRF-2024-007',
                'notes' => 'Canadian office setup fund',
                'status' => 'pending',
                'created_at' => '2024-02-10 13:45:00',
                'updated_at' => '2024-02-10 13:45:00',
            ],
            [
                'from_currency_id' => 3, // GBP
                'to_currency_id' => 2, // EUR
                'amount' => 12000.00,
                'exchange_rate' => 1.16,
                'converted_amount' => 13920.00,
                'reference' => 'TRF-2024-008',
                'notes' => 'European market expansion',
                'status' => 'completed',
                'created_at' => '2024-02-12 10:00:00',
                'updated_at' => '2024-02-12 10:05:00',
            ],
            [
                'from_currency_id' => 9, // AED
                'to_currency_id' => 10, // EGP
                'amount' => 18350.00,
                'exchange_rate' => 4.28,
                'converted_amount' => 78538.00,
                'reference' => 'TRF-2024-009',
                'notes' => 'Egypt regional office funding',
                'status' => 'cancelled',
                'created_at' => '2024-02-14 15:20:00',
                'updated_at' => '2024-02-14 15:25:00',
            ],
            [
                'from_currency_id' => 1, // USD
                'to_currency_id' => 7, // CHF
                'amount' => 6000.00,
                'exchange_rate' => 0.92,
                'converted_amount' => 5520.00,
                'reference' => 'TRF-2024-010',
                'notes' => 'Swiss banking operations',
                'status' => 'pending',
                'created_at' => '2024-02-15 12:30:00',
                'updated_at' => '2024-02-15 12:30:00',
            ],
        ];

        foreach ($transfers as $transfer) {
            CurrencyTransfer::create($transfer);
        }
    }
}
