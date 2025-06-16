<?php

namespace Database\Seeders;

use App\Models\ExchangeClient;
use Illuminate\Database\Seeder;

class ExchangeClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Ahmed Al-Rashid',
                'email' => 'ahmed.rashid@email.com',
                'phone' => '+966-50-123-4567',
                'identity_number' => '1234567890',
                'address' => 'King Fahd Road, Riyadh, Saudi Arabia',
                'nationality' => 'Saudi Arabian',
                'occupation' => 'Business Owner',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
            [
                'name' => 'Mohammed Hassan',
                'email' => 'mohammed.hassan@email.com',
                'phone' => '+971-50-234-5678',
                'identity_number' => '2345678901',
                'address' => 'Sheikh Zayed Road, Dubai, UAE',
                'nationality' => 'Emirati',
                'occupation' => 'Engineer',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
            [
                'name' => 'Fatima Al-Zahra',
                'email' => 'fatima.zahra@email.com',
                'phone' => '+20-10-345-6789',
                'identity_number' => '3456789012',
                'address' => 'Tahrir Square, Cairo, Egypt',
                'nationality' => 'Egyptian',
                'occupation' => 'Doctor',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
            [
                'name' => 'Omar Abdullah',
                'email' => 'omar.abdullah@email.com',
                'phone' => '+962-79-456-7890',
                'identity_number' => '4567890123',
                'address' => 'Amman Downtown, Jordan',
                'nationality' => 'Jordanian',
                'occupation' => 'Teacher',
                'verification_status' => 'pending',
                'status' => 'active',
            ],
            [
                'name' => 'Layla Ibrahim',
                'email' => 'layla.ibrahim@email.com',
                'phone' => '+965-50-567-8901',
                'identity_number' => '5678901234',
                'address' => 'Kuwait City, Kuwait',
                'nationality' => 'Kuwaiti',
                'occupation' => 'Lawyer',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
            [
                'name' => 'Khalid Al-Mansouri',
                'email' => 'khalid.mansouri@email.com',
                'phone' => '+973-33-678-9012',
                'identity_number' => '6789012345',
                'address' => 'Manama, Bahrain',
                'nationality' => 'Bahraini',
                'occupation' => 'Banker',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
            [
                'name' => 'Nadia Al-Qasimi',
                'email' => 'nadia.qasimi@email.com',
                'phone' => '+968-90-789-0123',
                'identity_number' => '7890123456',
                'address' => 'Muscat, Oman',
                'nationality' => 'Omani',
                'occupation' => 'Architect',
                'verification_status' => 'rejected',
                'status' => 'inactive',
            ],
            [
                'name' => 'Yusuf Al-Thani',
                'email' => 'yusuf.thani@email.com',
                'phone' => '+974-55-890-1234',
                'identity_number' => '8901234567',
                'address' => 'Doha, Qatar',
                'nationality' => 'Qatari',
                'occupation' => 'Consultant',
                'verification_status' => 'verified',
                'status' => 'suspended',
            ],
            [
                'name' => 'Amina Al-Sabah',
                'email' => 'amina.sabah@email.com',
                'phone' => '+965-60-901-2345',
                'identity_number' => '9012345678',
                'address' => 'Hawalli, Kuwait',
                'nationality' => 'Kuwaiti',
                'occupation' => 'Pharmacist',
                'verification_status' => 'pending',
                'status' => 'active',
            ],
            [
                'name' => 'Hassan Al-Maktoum',
                'email' => 'hassan.maktoum@email.com',
                'phone' => '+971-55-012-3456',
                'identity_number' => '0123456789',
                'address' => 'Abu Dhabi, UAE',
                'nationality' => 'Emirati',
                'occupation' => 'Real Estate Developer',
                'verification_status' => 'verified',
                'status' => 'active',
            ],
        ];

        foreach ($clients as $client) {
            ExchangeClient::create($client);
        }
    }
}
