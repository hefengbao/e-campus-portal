<?php

namespace App\Filament\App\Widgets;

use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

/**
 * 参考：https://filamentphp.com/plugins/saade-fullcalendar
 *
 * 文档：https://filamentphp.com/plugins/saade-fullcalendar
 */
class CalendarWidget extends FullCalendarWidget
{
    public function fetchEvents(array $fetchInfo): array
    {
        return [];
    }
}
