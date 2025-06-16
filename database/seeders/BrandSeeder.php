<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Apple',
                'description' => 'Premium technology products and consumer electronics',
                'website' => 'https://www.apple.com',
                'country' => 'United States',
                'established_year' => 1976,
                'status' => 'active',
            ],
            [
                'name' => 'Samsung',
                'description' => 'Global leader in technology, opening new possibilities for people everywhere',
                'website' => 'https://www.samsung.com',
                'country' => 'South Korea',
                'established_year' => 1938,
                'status' => 'active',
            ],
            [
                'name' => 'Microsoft',
                'description' => 'Technology company that develops and supports software, services, devices and solutions',
                'website' => 'https://www.microsoft.com',
                'country' => 'United States',
                'established_year' => 1975,
                'status' => 'active',
            ],
            [
                'name' => 'Dell',
                'description' => 'Multinational computer technology company that develops, sells, repairs, and supports computers',
                
                'website' => 'https://www.dell.com',
                'country' => 'United States',
                'established_year' => 1984,
                'status' => 'active',
            ],
            [
                'name' => 'HP',
                'description' => 'American multinational information technology company',
                
                'website' => 'https://www.hp.com',
                'country' => 'United States',
                'established_year' => 1939,
                'status' => 'active',
            ],
            [
                'name' => 'Lenovo',
                'description' => 'Chinese multinational technology company specializing in designing, manufacturing and marketing consumer electronics',
                
                'website' => 'https://www.lenovo.com',
                'country' => 'China',
                'established_year' => 1984,
                'status' => 'active',
            ],
            [
                'name' => 'Sony',
                'description' => 'Japanese multinational conglomerate corporation headquartered in Tokyo',
                
                'website' => 'https://www.sony.com',
                'country' => 'Japan',
                'established_year' => 1946,
                'status' => 'active',
            ],
            [
                'name' => 'Canon',
                'description' => 'Japanese multinational corporation specializing in the manufacture of imaging and optical products',
                
                'website' => 'https://www.canon.com',
                'country' => 'Japan',
                'established_year' => 1937,
                'status' => 'active',
            ],
            [
                'name' => 'Logitech',
                'description' => 'Swiss-American manufacturer of computer peripherals and software',
                
                'website' => 'https://www.logitech.com',
                'country' => 'Switzerland',
                'established_year' => 1981,
                'status' => 'active',
            ],
            [
                'name' => 'IKEA',
                'description' => 'Swedish-founded multinational conglomerate that designs and sells ready-to-assemble furniture',
                
                'website' => 'https://www.ikea.com',
                'country' => 'Sweden',
                'established_year' => 1943,
                'status' => 'active',
            ],
            [
                'name' => 'Herman Miller',
                'description' => 'American company that produces office furniture, equipment, and home furnishings',
                
                'website' => 'https://www.hermanmiller.com',
                'country' => 'United States',
                'established_year' => 1905,
                'status' => 'active',
            ],
            [
                'name' => 'Steelcase',
                'description' => 'American manufacturer of office furniture, casegoods, seating, and storage and partitioning systems',
                
                'website' => 'https://www.steelcase.com',
                'country' => 'United States',
                'established_year' => 1912,
                'status' => 'active',
            ],
            [
                'name' => '3M',
                'description' => 'American multinational conglomerate corporation operating in the fields of industry, worker safety, and consumer goods',
                
                'website' => 'https://www.3m.com',
                'country' => 'United States',
                'established_year' => 1902,
                'status' => 'active',
            ],
            [
                'name' => 'Staples',
                'description' => 'American multinational office supply retailing corporation',
                
                'website' => 'https://www.staples.com',
                'country' => 'United States',
                'established_year' => 1986,
                'status' => 'active',
            ],
            [
                'name' => 'Philips',
                'description' => 'Dutch multinational conglomerate corporation that was founded in Eindhoven',
                
                'website' => 'https://www.philips.com',
                'country' => 'Netherlands',
                'established_year' => 1891,
                'status' => 'active',
            ],
            [
                'name' => 'Generic Brand',
                'description' => 'Generic products without specific brand identity',
                
                'website' => null,
                'country' => null,
                'established_year' => null,
                'status' => 'active',
            ],
            [
                'name' => 'OldTech',
                'description' => 'Legacy technology brand no longer in active production',
                
                'website' => null,
                'country' => 'United States',
                'established_year' => 1990,
                'status' => 'inactive',
            ],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
