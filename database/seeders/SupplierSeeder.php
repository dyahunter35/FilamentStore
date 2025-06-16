<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            [
                'name' => 'Premium Supplies Inc',
                'email' => 'orders@premiumsupplies.com',
                'phone' => '+1-555-0201',
                'company' => 'Premium Supplies Inc',
                'contact_person' => 'Robert Johnson',
                'address' => '100 Supplier Lane',
                'city' => 'Dallas',
                'state' => 'TX',
                'country' => 'USA',
                'postal_code' => '75201',
                'tax_number' => 'SUP123456789',
                'payment_terms' => 'Net 30',
                'credit_limit' => 50000.00,
                'status' => 'active',
            ],
            [
                'name' => 'Quality Materials Ltd',
                'email' => 'sales@qualitymaterials.com',
                'phone' => '+1-555-0202',
                'company' => 'Quality Materials Ltd',
                'contact_person' => 'Lisa Anderson',
                'address' => '200 Materials Ave',
                'city' => 'Seattle',
                'state' => 'WA',
                'country' => 'USA',
                'postal_code' => '98101',
                'tax_number' => 'SUP987654321',
                'payment_terms' => 'Net 45',
                'credit_limit' => 75000.00,
                'status' => 'active',
            ],
            [
                'name' => 'Wholesale Direct',
                'email' => 'info@wholesaledirect.com',
                'phone' => '+1-555-0203',
                'company' => 'Wholesale Direct',
                'contact_person' => 'Michael Brown',
                'address' => '300 Wholesale Blvd',
                'city' => 'Phoenix',
                'state' => 'AZ',
                'country' => 'USA',
                'postal_code' => '85001',
                'tax_number' => 'SUP456789123',
                'payment_terms' => 'Net 15',
                'credit_limit' => 30000.00,
                'status' => 'active',
            ],
            [
                'name' => 'Industrial Components Co',
                'email' => 'procurement@indcomp.com',
                'phone' => '+1-555-0204',
                'company' => 'Industrial Components Co',
                'contact_person' => 'Jennifer Davis',
                'address' => '400 Industrial Way',
                'city' => 'Detroit',
                'state' => 'MI',
                'country' => 'USA',
                'postal_code' => '48201',
                'tax_number' => 'SUP789123456',
                'payment_terms' => 'Net 60',
                'credit_limit' => 100000.00,
                'status' => 'active',
            ],
            [
                'name' => 'Budget Suppliers',
                'email' => 'contact@budgetsuppliers.com',
                'phone' => '+1-555-0205',
                'company' => 'Budget Suppliers',
                'contact_person' => 'David Wilson',
                'address' => '500 Budget St',
                'city' => 'Atlanta',
                'state' => 'GA',
                'country' => 'USA',
                'postal_code' => '30301',
                'tax_number' => 'SUP321654987',
                'payment_terms' => 'Net 30',
                'credit_limit' => 25000.00,
                'status' => 'inactive',
            ],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}
