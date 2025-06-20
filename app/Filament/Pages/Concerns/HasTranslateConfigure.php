<?php

namespace App\Filament\Pages\Concerns;

use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Infolists;
use ReflectionClass;
use ReflectionProperty;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\Repeater;
use Illuminate\Support\Facades\Lang;

trait HasTranslateConfigure
{
    protected static array $cachedTranslations = [];

    /**
     * Get a direct translation or generate one automatically from the component properties
     * @param string $key The translation key
     * @param array $replacements Optional parameter replacements
     * @return string|null The translated string or null
     */
    public static function getSmartTranslation(string $key, array $replacements = []): ?string
    {
        $locale_path = static::getLocalePath();
        $fullKey = $locale_path . '.' . $key;

        // Check if translation already exists in language file
        if (Lang::has($fullKey, app()->getLocale())) {
            return __($fullKey, $replacements);
        }

        return null;
    }

    /**
     * Cache translations for performance
     */
    protected static function cacheTranslations(string $locale_path): void
    {
        if (!empty(static::$cachedTranslations[$locale_path])) {
            return;
        }

        $translations = trans($locale_path);
        static::$cachedTranslations[$locale_path] = is_array($translations) ? $translations : [];
    }

    public static function translateConfigureInfolist(): void
    {
        Infolists\Components\Component::configureUsing(function (Infolists\Components\Component $entry): void {
            if ($entry->getLabel()) {
                $label = (string) str($entry->getLabel())
                    ->beforeLast('.')
                    ->afterLast('.')
                    ->kebab()
                    ->replace(['-', '_'], ' ')
                    ->replaceLast(' id', ' ')
                    ->snake();

                if (method_exists($entry, 'label')) {
                    if ($localeLabel = static::getSmartTranslation('fields.' . $label . '.label')) {
                        $entry->label($localeLabel);
                    }
                }

                if (method_exists($entry, 'heading')) {
                    $name = (string) str($entry->getName())
                        ->beforeLast('.')
                        ->afterLast('.')
                        ->kebab()
                        ->replace(['-', '_'], ' ')
                        ->replaceLast(' id', ' ')
                        ->snake();

                    if ($localeHeading = static::getSmartTranslation('fields.' . $name . '.heading')) {
                        $entry->label($localeHeading);
                    }
                }
            }
        });
    }

    public static function translateConfigureForm(): void
    {
        static::cacheTranslations(static::getLocalePath());

        Forms\Components\Component::configureUsing(function (Forms\Components\Component $component): void {
            // Get component type for special handling
            $componentType = get_class($component);

            // Special handling for Section components
            if ($component instanceof Section) {
                $heading = $component->getHeading();
                if ($heading) {
                    $cleanHeading = (string) str($heading)->snake();
                    if ($localeHeading = static::getSmartTranslation('fields.' . $cleanHeading . '.label')) {
                        $component->heading($localeHeading);
                    }

                    // Also look for a description
                    if (method_exists($component, 'getDescription') && $description = static::getSmartTranslation('form.' . $cleanHeading . '.description')) {
                        $component->description($description);
                    }
                }
            }

            // Special handling for Wizard Steps
            elseif ($component instanceof Step) {
                $label = $component->getLabel();
                if ($label) {
                    $cleanLabel = (string) str($label)->snake();
                    if ($localeLabel = static::getSmartTranslation('fields.' . $cleanLabel . '.label')) {
                        $component->label($localeLabel);
                    }

                    // Also look for a description
                    if (method_exists($component, 'getDescription') && $description = static::getSmartTranslation('fields.' . $cleanLabel . '.description')) {
                        $component->description($description);
                    }
                }
            }

            // Standard component handling
            elseif ($component->getLabel()) {
                $label = (string) str($component->getLabel())
                    ->snake()
                    ->replaceLast('_id', '')
                    ->beforeLast('.')
                    ->afterLast('.')
                    ->replace(['-', '_'], ' ')
                    ->snake();

                if (method_exists($component, 'label')) {
                    if ($localeLabel = static::getSmartTranslation('fields.' . $label . '.label')) {
                        $component->label($localeLabel);
                    }
                }

                if (method_exists($component, 'placeholder') && $locale_placeholder = static::getSmartTranslation('fields.' . $label . '.placeholder')) {
                    $component->placeholder($locale_placeholder);
                }

                if (method_exists($component, 'description') && $locale_description = static::getSmartTranslation('fields.' . $label . '.description')) {
                    $component->description($locale_description);
                }

                if (method_exists($component, 'helperText') && filled($helperText = static::getSmartTranslation('fields.' . $label . '.helper_text'))) {
                    $component->helperText($helperText);
                }

                // Handle select/radio options if it's a selectable component
                if (method_exists($component, 'options') && method_exists($component, 'getOptions')) {
                    $options = $component->getOptions();
                    if (is_array($options)) {
                        $translatedOptions = [];
                        foreach ($options as $key => $value) {
                            $optionKey = 'fields.' . $label . '.' . $key;
                            $translatedOptions[$key] = static::getSmartTranslation($optionKey) ?? $value;
                        }
                        $component->options($translatedOptions);
                    }
                }

                // Handle Repeater specific add action label
                if ($component instanceof Repeater && method_exists($component, 'addActionLabel')) {
                    $addActionKey = 'fields.' . $label . '.add_more';
                    if ($addActionLabel = static::getSmartTranslation($addActionKey)) {
                        $component->addActionLabel($addActionLabel);
                    }
                }
            }

            // Handle components with name but no label (like hidden fields)
            if (!$component->getLabel() && method_exists($component, 'getName') && $component->getName()) {
                $name = (string) str($component->getName())
                    ->beforeLast('.')
                    ->afterLast('.')
                    ->snake();

                // Apply translations based on the name
                if (method_exists($component, 'label') && $localeLabel = static::getSmartTranslation('fields.' . $name . '.label')) {
                    $component->label($localeLabel);
                }

                if (method_exists($component, 'helperText') && $helperText = static::getSmartTranslation('fields.' . $name . '.helper_text')) {
                    $component->helperText($helperText);
                }
            }
        });
    }

    public static function translateConfigureTable(): void
    {
        Tables\Columns\Column::configureUsing(function (Tables\Columns\Column $component) {
            $label = (string) Str::of($component->getName())
                ->beforeLast('.')
                ->afterLast('.')
                ->kebab()
                ->replace(['-', '_'], ' ')
                ->replaceLast(' id', ' ')
                ->snake();

            if (method_exists($component, 'label')) {
                if ($localeLabel = static::getSmartTranslation('fields.' . $label . '.label')) {
                    $component->label($localeLabel);
                }
            }

            if (method_exists($component, 'description') && $locale_description = static::getSmartTranslation('fields.' . $label . '.description')) {
                $component->description($locale_description);
            }

            if (method_exists($component, 'prefix') && $locale_prefix = static::getSmartTranslation('fields.' . $label . '.prefix')) {
                $component->prefix($locale_prefix);
            }
        });
    }

    public static function multiLanguageFormComponent(Forms\Components\Component $formComponent, array $languages = ['ar', 'en']): array
    {
        $name = $formComponent->getName();

        return [
            Forms\Components\Tabs::make($name . '_tab')
                ->tabs(
                    collect($languages)->map(fn($language) => Forms\Components\Tabs\Tab::make($language . 'tabs')
                        ->label(__('language.' . $language))
                        ->schema([
                            (clone $formComponent)->name($name . '.' . $language)
                                ->statePath($name . '.' . $language)
                        ]))->toArray()
                )
        ];
    }

    /**
     * Extract all translatable strings from a form
     * Can be used to automatically generate translation files
     */
    public static function extractTranslatableStrings(Forms\Form $form): array
    {
        $strings = [];

        $extractFromComponent = function ($component) use (&$strings, &$extractFromComponent) {
            // Get basic component info
            if (method_exists($component, 'getLabel')) {
                $label = $component->getLabel();
                if ($label) {
                    $cleanLabel = (string) str($label)->snake();

                    // Add to strings array
                    $strings['fields'][$cleanLabel]['label'] = $label;

                    // Get helper text if available
                    if (method_exists($component, 'getHelperText')) {
                        $helperText = $component->getHelperText();
                        if ($helperText) {
                            $strings['fields'][$cleanLabel]['helper_text'] = $helperText;
                        }
                    }

                    // // Get placeholder if available
                    // if (method_exists($component, 'getPlaceholder')) {
                    //     $placeholder = $component->getPlaceholder();
                    //     if ($placeholder) {
                    //         $strings['fields'][$cleanLabel]['placeholder'] = $placeholder;
                    //     }
                    // }

                    // Get description if available
                    if (method_exists($component, 'getDescription')) {
                        $description = $component->getDescription();
                        if ($description) {
                            $strings['fields'][$cleanLabel]['description'] = $description;
                        }
                    }

                    // // Get options if available
                    // if (method_exists($component, 'getOptions')) {
                    //     $options = $component->getOptions();
                    //     if (is_array($options)) {
                    //         foreach ($options as $key => $value) {
                    //             $strings['fields'][$cleanLabel][$key] = $value;
                    //         }
                    //     }
                    // }
                }
            }

            // Handle specific components
            if ($component instanceof Section && method_exists($component, 'getHeading')) {
                $heading = $component->getHeading();
                if ($heading) {
                    $cleanHeading = (string) str($heading)->snake();
                    $strings['fields'][$cleanHeading]['label'] = $heading;

                    if (method_exists($component, 'getDescription')) {
                        $description = $component->getDescription();
                        if ($description) {
                            $strings['fields'][$cleanHeading]['description'] = $description;
                        }
                    }
                }
            }

            if ($component instanceof Step && method_exists($component, 'getLabel')) {
                $stepLabel = $component->getLabel();
                if ($stepLabel) {
                    $cleanLabel = (string) str($stepLabel)->snake();
                    $strings['fields'][$cleanLabel]['label'] = $stepLabel;

                    if (method_exists($component, 'getDescription')) {
                        $description = $component->getDescription();
                        if ($description) {
                            $strings['fields'][$cleanLabel]['description'] = $description;
                        }
                    }
                }
            }

            // Process children if they exist
            if (method_exists($component, 'getChildComponents')) {
                $children = $component->getChildComponents();
                foreach ($children as $child) {
                    $extractFromComponent($child);
                }
            }

            return $strings;
        };

        // Process all components in the form
        foreach ($form->getComponents() as $component) {
            $extractFromComponent($component);
        }

        return $strings;
    }
}
