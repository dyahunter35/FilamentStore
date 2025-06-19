<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            [
                'name' => 'Alice Johnson',
                'email' => 'alice2.johnson@company.com',
                'phone' => '+1-555-0301',

                'department' => 'Human Resources',
                'position' => 'HR Manager',
                'salary' => 75000.00,
                'hire_date' => '2022-01-15',
                'address' => '123 Employee St, City, State 12345',
                'emergency_contact' => 'John Johnson - +1-555-0311',
                'status' => 'active',
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@company.com',
                'phone' => '+1-555-0302',

                'department' => 'Information Technology',
                'position' => 'Software Developer',
                'salary' => 85000.00,
                'hire_date' => '2021-03-20',
                'address' => '456 Developer Ave, City, State 12346',
                'emergency_contact' => 'Mary Smith - +1-555-0312',
                'status' => 'active',
            ],
            [
                'name' => 'Carol Davis',
                'email' => 'carol.davis@company.com',
                'phone' => '+1-555-0303',

                'department' => 'Finance',
                'position' => 'Accountant',
                'salary' => 65000.00,
                'hire_date' => '2022-06-10',
                'address' => '789 Finance Blvd, City, State 12347',
                'emergency_contact' => 'Tom Davis - +1-555-0313',
                'status' => 'active',
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@company.com',
                'phone' => '+1-555-0304',

                'department' => 'Sales',
                'position' => 'Sales Representative',
                'salary' => 55000.00,
                'hire_date' => '2023-02-01',
                'address' => '321 Sales St, City, State 12348',
                'emergency_contact' => 'Lisa Wilson - +1-555-0314',
                'status' => 'active',
            ],
            [
                'name' => 'Eva Brown',
                'email' => 'eva.brown@company.com',
                'phone' => '+1-555-0305',

                'department' => 'Marketing',
                'position' => 'Marketing Specialist',
                'salary' => 60000.00,
                'hire_date' => '2021-09-15',
                'address' => '654 Marketing Way, City, State 12349',
                'emergency_contact' => 'Mike Brown - +1-555-0315',
                'status' => 'active',
            ],
            [
                'name' => 'Frank Miller',
                'email' => 'frank.miller@company.com',
                'phone' => '+1-555-0306',

                'department' => 'Operations',
                'position' => 'Operations Manager',
                'salary' => 80000.00,
                'hire_date' => '2020-11-30',
                'address' => '987 Operations Rd, City, State 12350',
                'emergency_contact' => 'Sarah Miller - +1-555-0316',
                'status' => 'inactive',
            ],
            [
                'name' => 'Grace Taylor',
                'email' => 'grace.taylor@company.com',
                'phone' => '+1-555-0307',
                'department' => 'Customer Service',
                'position' => 'Customer Service Representative',
                'salary' => 45000.00,
                'hire_date' => '2023-05-01',
                'address' => '147 Service Lane, City, State 12351',
                'emergency_contact' => 'Paul Taylor - +1-555-0317',
                'status' => 'terminated',
            ],
        ];

        $branches = \App\Models\Branch::all();

        foreach ($employees as $employee) {
            $employee = Employee::create($employee);

            $randomBranches = $branches->random(rand(1, $branches->count()));
            foreach ($randomBranches as $branch) {
                $branch->employees()->attach($employee->id);
            }
        }


    }
}
