<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'name' => 'ABC Corporation',
                'email' => 'contact@abccorp.com',
                'phone' => '+1-555-0101',
                'company' => 'ABC Corporation',
                'address' => '123 Business Ave',
                'city' => 'New York',
                'state' => 'NY',
                'country' => 'USA',
                'postal_code' => '10001',
                'tax_number' => 'TAX123456789',
                'status' => 'active',
            ],
            [
                'name' => 'XYZ Industries',
                'email' => 'info@xyzind.com',
                'phone' => '+1-555-0102',
                'company' => 'XYZ Industries',
                'address' => '456 Industrial Blvd',
                'city' => 'Los Angeles',
                'state' => 'CA',
                'country' => 'USA',
                'postal_code' => '90001',
                'tax_number' => 'TAX987654321',
                'status' => 'active',
            ],
            [
                'name' => 'Tech Solutions Ltd',
                'email' => 'hello@techsolutions.com',
                'phone' => '+1-555-0103',
                'company' => 'Tech Solutions Ltd',
                'address' => '789 Tech Park',
                'city' => 'San Francisco',
                'state' => 'CA',
                'country' => 'USA',
                'postal_code' => '94102',
                'tax_number' => 'TAX456789123',
                'status' => 'active',
            ],
            [
                'name' => 'Global Trading Co',
                'email' => 'sales@globaltrading.com',
                'phone' => '+1-555-0104',
                'company' => 'Global Trading Co',
                'address' => '321 Commerce St',
                'city' => 'Chicago',
                'state' => 'IL',
                'country' => 'USA',
                'postal_code' => '60601',
                'tax_number' => 'TAX789123456',
                'status' => 'active',
            ],
            [
                'name' => 'Retail Plus',
                'email' => 'orders@retailplus.com',
                'phone' => '+1-555-0105',
                'company' => 'Retail Plus',
                'address' => '654 Retail Row',
                'city' => 'Miami',
                'state' => 'FL',
                'country' => 'USA',
                'postal_code' => '33101',
                'tax_number' => 'TAX321654987',
                'status' => 'inactive',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
