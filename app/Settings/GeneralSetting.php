<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSetting extends Settings
{

    public string $siteName;

    public bool $siteActive;

    public array $currencyRates = [] ;

    public static function group(): string
    {
        return 'settings';
    }
}
