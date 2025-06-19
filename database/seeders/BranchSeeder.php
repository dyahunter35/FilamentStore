<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Branch::create([
            'name' => 'Main-Branch',
            'location' => '123 Main St, City, Country',
            'enable' => true,
        ]);
        \App\Models\Branch::create([
            'name' => 'Secondary-Branch',
            'location' => '456 Secondary St, City, Country',
            'enable' => true,
        ]);
        \App\Models\Branch::create([
            'name' => 'Tertiary-Branch',
            'location' => '789 Tertiary St, City, Country',
            'enable' => true,
        ]);

        $branches = \App\Models\Branch::all();
        $users = \App\Models\User::all();

        foreach ($users as $user) {
            $randomBranches = $branches->random(rand(1, $branches->count()));
            foreach ($randomBranches as $branch) {
                $branch->members()->attach($user->id);
            }
        }
    }
}
