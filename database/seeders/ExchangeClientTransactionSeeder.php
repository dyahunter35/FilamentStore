<?php

namespace Database\Seeders;

use App\Models\ExchangeClientTransaction;
use Illuminate\Database\Seeder;

class ExchangeClientTransactionSeeder extends Seeder
{
    public function run(): void
    {
        $transactions = [
            [
                'client_id' => 1, // Ahmed Al-Rashid
                'transaction_type' => 'buy',
                'from_currency_id' => 8, // SAR
                'to_currency_id' => 1, // USD
                'amount' => 37500.00,
                'exchange_rate' => 0.2667,
                'converted_amount' => 10000.00,
                'commission' => 50.00,
                'net_amount' => 9950.00,
                'reference_number' => 'EXC-2024-001',
                'notes' => 'Business investment in US market',
                'status' => 'completed',
                'created_at' => '2024-01-15 09:30:00',
                'updated_at' => '2024-01-15 09:35:00',
            ],
            [
                'client_id' => 2, // Mohammed Hassan
                'transaction_type' => 'sell',
                'from_currency_id' => 1, // USD
                'to_currency_id' => 9, // AED
                'amount' => 5000.00,
                'exchange_rate' => 3.67,
                'converted_amount' => 18350.00,
                'commission' => 92.00,
                'net_amount' => 18258.00,
                'reference_number' => 'EXC-2024-002',
                'notes' => 'Property purchase in Dubai',
                'status' => 'completed',
                'created_at' => '2024-01-18 14:20:00',
                'updated_at' => '2024-01-18 14:25:00',
            ],
            [
                'client_id' => 3, // Fatima Al-Zahra
                'transaction_type' => 'buy',
                'from_currency_id' => 10, // EGP
                'to_currency_id' => 2, // EUR
                'amount' => 78500.00,
                'exchange_rate' => 0.0541,
                'converted_amount' => 4247.85,
                'commission' => 85.00,
                'net_amount' => 4162.85,
                'reference_number' => 'EXC-2024-003',
                'notes' => 'Medical treatment in Germany',
                'status' => 'completed',
                'created_at' => '2024-01-22 11:15:00',
                'updated_at' => '2024-01-22 11:20:00',
            ],
            [
                'client_id' => 4, // Omar Abdullah
                'transaction_type' => 'buy',
                'from_currency_id' => 1, // USD
                'to_currency_id' => 3, // GBP
                'amount' => 3000.00,
                'exchange_rate' => 0.73,
                'converted_amount' => 2190.00,
                'commission' => 30.00,
                'net_amount' => 2160.00,
                'reference_number' => 'EXC-2024-004',
                'notes' => 'Education expenses in UK',
                'status' => 'pending',
                'created_at' => '2024-01-25 16:45:00',
                'updated_at' => '2024-01-25 16:45:00',
            ],
            [
                'client_id' => 5, // Layla Ibrahim
                'transaction_type' => 'sell',
                'from_currency_id' => 2, // EUR
                'to_currency_id' => 1, // USD
                'amount' => 8500.00,
                'exchange_rate' => 1.18,
                'converted_amount' => 10030.00,
                'commission' => 100.00,
                'net_amount' => 9930.00,
                'reference_number' => 'EXC-2024-005',
                'notes' => 'Investment portfolio diversification',
                'status' => 'completed',
                'created_at' => '2024-01-28 10:30:00',
                'updated_at' => '2024-01-28 10:35:00',
            ],
            [
                'client_id' => 6, // Khalid Al-Mansouri
                'transaction_type' => 'buy',
                'from_currency_id' => 1, // USD
                'to_currency_id' => 4, // JPY
                'amount' => 7500.00,
                'exchange_rate' => 110.0,
                'converted_amount' => 825000.00,
                'commission' => 75.00,
                'net_amount' => 824925.00,
                'reference_number' => 'EXC-2024-006',
                'notes' => 'Business expansion in Japan',
                'status' => 'completed',
                'created_at' => '2024-02-02 13:20:00',
                'updated_at' => '2024-02-02 13:25:00',
            ],
            [
                'client_id' => 1, // Ahmed Al-Rashid (second transaction)
                'transaction_type' => 'sell',
                'from_currency_id' => 1, // USD
                'to_currency_id' => 8, // SAR
                'amount' => 2000.00,
                'exchange_rate' => 3.75,
                'converted_amount' => 7500.00,
                'commission' => 37.50,
                'net_amount' => 7462.50,
                'reference_number' => 'EXC-2024-007',
                'notes' => 'Local business expenses',
                'status' => 'completed',
                'created_at' => '2024-02-05 15:10:00',
                'updated_at' => '2024-02-05 15:15:00',
            ],
            [
                'client_id' => 10, // Hassan Al-Maktoum
                'transaction_type' => 'buy',
                'from_currency_id' => 9, // AED
                'to_currency_id' => 1, // USD
                'amount' => 183500.00,
                'exchange_rate' => 0.2725,
                'converted_amount' => 50003.75,
                'commission' => 500.00,
                'net_amount' => 49503.75,
                'reference_number' => 'EXC-2024-008',
                'notes' => 'Real estate investment in USA',
                'status' => 'completed',
                'created_at' => '2024-02-08 09:45:00',
                'updated_at' => '2024-02-08 09:50:00',
            ],
            [
                'client_id' => 3, // Fatima Al-Zahra (second transaction)
                'transaction_type' => 'sell',
                'from_currency_id' => 2, // EUR
                'to_currency_id' => 10, // EGP
                'amount' => 1500.00,
                'exchange_rate' => 18.47,
                'converted_amount' => 27705.00,
                'commission' => 138.50,
                'net_amount' => 27566.50,
                'reference_number' => 'EXC-2024-009',
                'notes' => 'Family support transfer',
                'status' => 'cancelled',
                'created_at' => '2024-02-10 12:30:00',
                'updated_at' => '2024-02-10 12:35:00',
            ],
            [
                'client_id' => 5, // Layla Ibrahim (second transaction)
                'transaction_type' => 'buy',
                'from_currency_id' => 1, // USD
                'to_currency_id' => 5, // CAD
                'amount' => 4000.00,
                'exchange_rate' => 1.25,
                'converted_amount' => 5000.00,
                'commission' => 40.00,
                'net_amount' => 4960.00,
                'reference_number' => 'EXC-2024-010',
                'notes' => 'Canadian vacation expenses',
                'status' => 'pending',
                'created_at' => '2024-02-12 14:15:00',
                'updated_at' => '2024-02-12 14:15:00',
            ],
        ];

        foreach ($transactions as $transaction) {
            ExchangeClientTransaction::create($transaction);
        }
    }
}
