<?php

namespace App\Filament\Pages;

use App\Filament\Pages\Concerns\HasPage;
use App\Settings\GeneralSetting;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Pages\SettingsPage;

class GeneralSettings extends SettingsPage
{
    use HasPage;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    public static function getNavigationLabel(): string
    {
        return __('general_settings.navigation.label');
    }
    public static function getNavigationGroup(): ?string
    {
        return __('general_settings.navigation.group');
    }

    protected static string $settings = GeneralSetting::class;

    public function form(Form $form): Form
    {
        static::translateConfigureTable();

        return $form
            ->schema([
                Forms\Components\Tabs::make(__('setting.tabs.app_information'))->tabs([
                    Tab::make(__('setting.tabs.general'))
                        ->schema([
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\Section::make(__('setting.sections.site_settings'))
                                        ->schema([
                                            Forms\Components\TextInput::make('site_name')
                                                ->label(__('setting.fields.site_name.label'))
                                                ->required(),

                                            Forms\Components\TextInput::make('site_description')
                                                ->label(__('setting.fields.site_description.label'))
                                                ->required(),

                                            /* Forms\Components\Toggle::make('site_active')
                                                ->label(__('setting.fields.site_active.label'))
                                                ->required(), */
                                        ]),
                                ])->columnSpan(2),
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\Section::make(__('setting.sections.logo'))
                                        ->schema([
                                            /*  SpatieMediaLibraryFileUpload::make('site_logo')
                                                ->label(__('setting.sections.logo'))
                                                ->collection('logo') */
                                            //->saveFiles(false) // Prevent default saving by the plugin
                                            Forms\Components\FileUpload::make('site_logo')
                                                ->label('')
                                                ->image()
                                                ->directory('settings/banners')
                                                ->maxFiles(1),

                                            Forms\Components\FileUpload::make('site_fav')
                                                ->label('Fav')
                                                ->image()
                                                ->directory('settings/banners')
                                                ->maxFiles(1),

                                            Forms\Components\ToggleButtons::make('auto_confirm_on_register')
                                                ->label(__('setting.fields.auto_confirm_on_register.label'))
                                                ->boolean()
                                                ->grouped()
                                                ->required(),

                                        ])
                                ]),
                            Forms\Components\Group::make()
                                ->schema([
                                    Forms\Components\Section::make(__('setting.fields.pages.label'))
                                        ->schema([
                                            Forms\Components\Repeater::make('pages')
                                                ->label('')

                                                ->schema([
                                                    Forms\Components\Select::make('label')
                                                        ->label(__('setting.fields.pages.fields.label'))
                                                        // ->options(PageType::class)
                                                        ->required(),
                                                    Forms\Components\Select::make('page')
                                                        ->label(__('setting.fields.pages.fields.page.label'))
                                                        // ->options(fn() => Page::active()->select('id', 'title')->get()->pluck('title', 'id'))
                                                        ->required(),
                                                ])->columns(2),
                                        ]),
                                ])->columnSpan(2),
                        ])->columns(3),

                    Tab::make(__('setting.tabs.advertisement'))
                        ->schema([
                            
                        ])->columns(2),
                    Tab::make(__('setting.tabs.contact'))
                        ->schema([
                            Forms\Components\KeyValue::make('contact')
                                ->label(__('setting.fields.contact.label'))
                                ->keyLabel(__('setting.fields.contact.key_label'))
                                ->keyPlaceholder(__('setting.fields.contact.key_placeholder')),

                            Forms\Components\Grid::make('space')->columnSpan(1),
                            Forms\Components\Repeater::make('socialMediaLinks')
                                ->label(__('setting.fields.social_media_links.label'))
                                ->schema([

                                    Forms\Components\TextInput::make('url')
                                        ->label(__('setting.fields.social_media_links.fields.url'))
                                        ->url()
                                        ->required(),

                                    Forms\Components\FileUpload::make('icon')
                                        ->label('')
                                        ->image()
                                        ->directory('settings/social')
                                        ->maxFiles(1)
                                    /* Forms\Components\Select::make('icon')
                                        ->label(__('setting.fields.social_media_links.fields.icon'))
                                        ->options([
                                            'heroicon-facebook' => 'Facebook',
                                            'heroicon-twitter' => 'Twitter',
                                            'heroicon-instagram' => 'Instagram',
                                            'heroicon-linkedin' => 'LinkedIn',
                                        ])
                                        ->required() */,
                                ])->columns(1),

                            Forms\Components\Repeater::make('links')
                                ->label(__('setting.fields.links.label'))

                                ->schema([
                                    Forms\Components\TextInput::make('label')
                                        ->label(__('setting.fields.links.fields.label'))
                                        ->required(),
                                    Forms\Components\TextInput::make('url')
                                        ->label(__('setting.fields.links.fields.url'))
                                        ->url()
                                        ->required(),
                                ])->columns(2),
                        ])->columns(2),

                    Tab::make(__('setting.tabs.financial'))
                        ->schema([
                            Forms\Components\Select::make('payment_provider')
                                ->label(__('setting.fields.payment_provider.label'))

                                ->options(
                                    [
                                        'alrajhi' => __('setting.fields.payment_provider.options.alrajhi'),
                                        'clickpay' => __('setting.fields.payment_provider.options.clickpay'),
                                    ]
                                ),
                            Forms\Components\TextInput::make('tax_percent')
                                ->label(__('setting.fields.tax_percent.label'))
                                ->numeric()
                                ->required(),

                            Forms\Components\TextInput::make('ad_monthly_fee')
                                ->label(__('setting.fields.product_monthly_fee.label'))
                                ->numeric()
                                ->required(),

                            Forms\Components\TextInput::make('delivery_request_complete_system_fee')
                                ->label(__('setting.fields.delivery_request_complete_system_fee.label'))
                                ->numeric()
                                ->required(),

                            Forms\Components\Section::make(__('setting.sections.credit_options'))
                                ->schema([
                                    Forms\Components\ToggleButtons::make('apply_free_credit_on_register')
                                        ->label(__('setting.fields.apply_free_credit_on_register.label'))
                                        ->boolean()
                                        ->live()
                                        ->grouped()
                                        ->required(),

                                    Forms\Components\TextInput::make('free_credit_apply_amount')
                                        ->label(__('setting.fields.free_credit_apply_amount.label'))
                                        ->numeric()
                                        ->minValue(0)
                                        ->live()
                                        ->visible(fn(Get $get) => $get('apply_free_credit_on_register'))
                                        ->required(),
                                ])->columns(2),

                            Forms\Components\Section::make(__('setting.sections.salasa'))
                                ->schema([
                                    Forms\Components\TextInput::make('salasa_delivery_order_request_cost')
                                        ->label(__('setting.fields.salasa_delivery_order_request_cost.label'))
                                        ->numeric()
                                        ->required(),

                                ])->columns(2)
                        ])->columns(2),
                ])->columnSpanFull()
            ]);
    }
}
