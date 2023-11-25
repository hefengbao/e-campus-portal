<?php

namespace App\Filament\Admin\Widgets;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Widgets\Widget;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use Filament\Forms\Components\TextInput;

/**
 * https://laraveldaily.com/post/filament-show-calendar-of-tasks-with-fullcalendar
 */
class CalendarWidget extends FullCalendarWidget
{
    //protected static string $view = 'filament.admin.widgets.calendar-widget';

    public function fetchEvents(array $info): array
    {
        return [];
    }

    public static function canView(): bool
    {
        return false;
    }

    public function getFormSchema(): array
    {
        return [
            TextInput::make('name'),

            Grid::make()
                ->schema([
                    DateTimePicker::make('starts_at'),

                    DateTimePicker::make('ends_at'),
                ]),
        ];
    }
}
