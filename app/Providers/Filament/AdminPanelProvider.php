<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Tenancy\EditBranchProfiles;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use App\Filament\Pages\Tenancy\RegisterBranch;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\DashboardNotifications;
use App\Filament\Widgets\RecentSales;
use App\Filament\Widgets\ProfitLossChart;
use App\Filament\Widgets\SalesChart;
use App\Filament\Widgets\PurchasesChart;
use App\Filament\Widgets\ExpensesChart;
use App\Filament\Widgets\InventoryValueChart;
use App\Filament\Widgets\InventoryOverview;
use App\Models\Branch;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingBladeView;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Filament\SpatieLaravelTenancyPlugin;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->tenant(
                Branch::class,
                'name'
            )
            ->tenantRegistration(RegisterBranch::class)
            ->tenantProfile(EditBranchProfiles::class)
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
                \App\Filament\Pages\InventoryReport::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Overview Widgets
                StatsOverview::class,
                DashboardNotifications::class,
                RecentSales::class,

                // Chart Widgets
                ProfitLossChart::class,
                SalesChart::class,
                PurchasesChart::class,
                ExpensesChart::class,
                InventoryValueChart::class,
                InventoryOverview::class,

                // System Widgets
                //Widgets\AccountWidget::class,
                //Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
            ])
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 4,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),
            ])->plugin(\TomatoPHP\FilamentLanguageSwitcher\FilamentLanguageSwitcherPlugin::make())

            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
