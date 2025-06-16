<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('settings.siteName', 'Store');
        $this->migrator->add('settings.siteActive', true);
        $this->migrator->add('settings.currencyRates', []);
    }
};
