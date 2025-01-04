<?php

namespace App\Filament\App\Widgets;

use Guava\Calendar\Widgets\CalendarWidget;
use Illuminate\Support\Collection;

/**
 * @deprecated
 */
class EventCalendarWidget extends CalendarWidget
{
    /*protected static string $view = 'filament.app.widgets.event-calendar-widget';*/

    public static function canView(): bool
    {
        return false;
    }

    public function getEvents(array $fetchInfo = []): Collection|array
    {
        /**
         * $fetchInfo
         *array:4 [▼ // app/Filament/App/Widgets/EventCalendarWidget.php:16
         * "start" => "2024-09-29T16:00:00.000Z"
         * "end" => "2024-11-03T16:00:00.000Z"
         * "startStr" => "2024-09-30T00:00:00"
         * "endStr" => "2024-11-04T00:00:00"
         * ]
         */
        return [
            // Chainable object-oriented variant
            /*Event::make()
                ->title('My first event')
                ->start(today())
                ->end(today()),*/

            // Array variant
            ['title' => 'My second event', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 2', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 3', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 4', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 5', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 5', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 5', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],
            ['title' => 'My second event 5', 'start' => today()->addDays(3), 'end' => today()->addDays(3)],

            // Eloquent model implementing the `Eventable` interface
            //MyEvent::find(1),
        ];
    }

}
