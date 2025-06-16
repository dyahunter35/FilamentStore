<?php

namespace Database\Seeders;

use App\Models\Attendance;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AttendanceSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [1, 2, 3, 4, 5]; // Employee IDs
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();

        $attendances = [];

        // Generate attendance records for the last 30 days
        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            // Skip weekends
            if ($date->isWeekend()) {
                continue;
            }

            foreach ($employees as $employeeId) {
                // 90% chance of attendance
                if (rand(1, 10) <= 9) {
                    $checkIn = $date->copy()->setTime(8, rand(0, 30), rand(0, 59));
                    $checkOut = $date->copy()->setTime(17, rand(0, 60), rand(0, 59));

                    // Calculate work hours
                    $workHours = $checkOut->diffInHours($checkIn);
                    $breakHours = 1; // 1 hour lunch break
                    $totalHours = $workHours - $breakHours;

                    $status = 'present';
                    if ($checkIn->hour > 8 || ($checkIn->hour == 8 && $checkIn->minute > 15)) {
                        $status = 'late';
                    }

                    $attendances[] = [
                        'employee_id' => $employeeId,
                        'date' => $date->format('Y-m-d'),
                        'check_in' => $checkIn->format('H:i:s'),
                        'check_out' => $checkOut->format('H:i:s'),
                        'break_start' => '12:00:00',
                        'break_end' => '13:00:00',
                        'total_hours' => $totalHours,
                        'overtime_hours' => max(0, $totalHours - 8),
                        'status' => $status,
                        'notes' => $status === 'late' ? 'Arrived late' : null,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                } else {
                    // Absent
                    $attendances[] = [
                        'employee_id' => $employeeId,
                        'date' => $date->format('Y-m-d'),
                        'check_in' => null,
                        'check_out' => null,
                        'break_start' => null,
                        'break_end' => null,
                        'total_hours' => 0,
                        'overtime_hours' => 0,
                        'status' => 'absent',
                        'notes' => 'Unexcused absence',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }
        }

        foreach ($attendances as $attendance) {
            Attendance::create($attendance);
        }
    }
}
