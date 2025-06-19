<?php

namespace App\Traits;

trait GenerateId
{
    /**
     * Generate a unique identifier for a model.
     *
     * @param string $prefix
     * @return string
     */
    public function generateUniqueNumber(string $prefix = '', string $fieldName = 'number'): string
    {
        $year = date('Y');
        $month = date('m');

        // Get the last record for current year/month
        $lastRecord = self::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->orderBy('id', 'desc')
            ->first();

        $nextNumber = 1;

        if ($lastRecord && isset($lastRecord->{$fieldName})) {
            $parts = explode('-', $lastRecord->{$fieldName});
            $lastNumber = (int) end($parts);
            $nextNumber = $lastNumber + 1;
        }

        return $prefix . $year . $month . '-' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
    }
}
