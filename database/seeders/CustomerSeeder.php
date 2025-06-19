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
                'address' => '123 Business Ave',

            ],
            [
                'name' => 'XYZ Industries',
                'email' => 'info@xyzind.com',
                'phone' => '+1-555-0102',
                'address' => '456 Industrial Blvd',

            ],
            [
                'name' => 'Tech Solutions Ltd',
                'email' => 'hello@techsolutions.com',
                'phone' => '+1-555-0103',
                'address' => '789 Tech Park',

            ],
            [
                'name' => 'Global Trading Co',
                'email' => 'sales@globaltrading.com',
                'phone' => '+1-555-0104',
                'address' => '321 Commerce St',

            ],
            [
                'name' => 'Retail Plus',
                'email' => 'orders@retailplus.com',
                'phone' => '+1-555-0105',
                'address' => '654 Retail Row',

            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
