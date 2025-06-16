<?php

namespace Database\Seeders;

use App\Models\OtherRevenue;
use Illuminate\Database\Seeder;

class OtherRevenueSeeder extends Seeder
{
    public function run(): void
    {
        $revenues = [
            [
                'title' => 'Bank Interest Income',
                'description' => 'Monthly interest earned from business savings account',
                'amount' => 450.00,
                'revenue_date' => '2024-01-31',
                'source' => 'First National Bank',
                'category' => 'interest',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'INT-2024-001',
                'notes' => 'Monthly interest payment',
                'status' => 'received',
            ],
            [
                'title' => 'Referral Commission',
                'description' => 'Commission from client referral to partner company',
                'amount' => 2500.00,
                'revenue_date' => '2024-02-05',
                'source' => 'TechPartner Solutions',
                'category' => 'commission',
                'payment_method' => 'check',
                'reference_number' => 'REF-2024-001',
                'notes' => 'Referral bonus for ABC Corporation client',
                'status' => 'received',
            ],
            [
                'title' => 'Office Space Rental',
                'description' => 'Monthly rent from subletting unused office space',
                'amount' => 1800.00,
                'revenue_date' => '2024-02-01',
                'source' => 'StartupCo Inc',
                'category' => 'rental',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'RENT-2024-002',
                'notes' => 'February office subletting payment',
                'status' => 'received',
            ],
            [
                'title' => 'Investment Dividend',
                'description' => 'Quarterly dividend from stock investments',
                'amount' => 3200.00,
                'revenue_date' => '2024-01-15',
                'source' => 'Investment Portfolio',
                'category' => 'investment',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'DIV-2024-Q1',
                'notes' => 'Q1 dividend payment from diversified portfolio',
                'status' => 'received',
            ],
            [
                'title' => 'Equipment Sale',
                'description' => 'Sale of old office equipment and furniture',
                'amount' => 850.00,
                'revenue_date' => '2024-02-10',
                'source' => 'Office Liquidators',
                'category' => 'other',
                'payment_method' => 'cash',
                'reference_number' => 'SALE-2024-001',
                'notes' => 'Sold old desks and chairs',
                'status' => 'received',
            ],
            [
                'title' => 'Consulting Fee',
                'description' => 'One-time consulting service for external client',
                'amount' => 1500.00,
                'revenue_date' => '2024-02-12',
                'source' => 'Global Enterprises',
                'category' => 'commission',
                'payment_method' => 'online',
                'reference_number' => 'CONS-2024-001',
                'notes' => 'Strategic planning consultation',
                'status' => 'pending',
            ],
            [
                'title' => 'Parking Space Rental',
                'description' => 'Monthly income from renting parking spaces',
                'amount' => 600.00,
                'revenue_date' => '2024-02-01',
                'source' => 'Various Tenants',
                'category' => 'rental',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'PARK-2024-002',
                'notes' => 'February parking rental income',
                'status' => 'received',
            ],
            [
                'title' => 'Insurance Claim Settlement',
                'description' => 'Settlement for damaged equipment claim',
                'amount' => 2200.00,
                'revenue_date' => '2024-01-25',
                'source' => 'Business Insurance Co',
                'category' => 'other',
                'payment_method' => 'check',
                'reference_number' => 'INS-2024-001',
                'notes' => 'Equipment damage claim settlement',
                'status' => 'received',
            ],
            [
                'title' => 'Government Grant',
                'description' => 'Small business development grant',
                'amount' => 5000.00,
                'revenue_date' => '2024-02-15',
                'source' => 'Small Business Administration',
                'category' => 'other',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'GRANT-2024-001',
                'notes' => 'Technology upgrade grant',
                'status' => 'pending',
            ],
            [
                'title' => 'Late Payment Interest',
                'description' => 'Interest charged on overdue client payments',
                'amount' => 125.00,
                'revenue_date' => '2024-02-08',
                'source' => 'Various Clients',
                'category' => 'interest',
                'payment_method' => 'bank_transfer',
                'reference_number' => 'LATE-2024-001',
                'notes' => 'Late payment penalties collected',
                'status' => 'cancelled',
            ],
        ];

        foreach ($revenues as $revenue) {
            OtherRevenue::create($revenue);
        }
    }
}
