<?php

namespace App\Filament\App\Widgets;

use App\Models\Event;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

/**
 * 文档：https://filamentphp.com/plugins/saade-fullcalendar
 */
class CalendarWidget extends FullCalendarWidget
{
    public static function canView(): bool
    {
        return false;
    }

    public function fetchEvents(array $info): array
    {
        return Event::query()
            ->where('started_at', '>=', $info['start'])
            ->where('ended_at', '<=', $info['end'])
            ->get()
            ->map(
                fn(Event $event) => [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->started_at,
                    'end' => $event->ended_at,
                    //'url' => EventResource::getUrl(name: 'view', parameters: ['record' => $event]),
                    'shouldOpenUrlInNewTab' => true
                ]
            )
            ->all();
    }

    public function config(): array
    {
        return [
            'firstDay' => 1,
            'headerToolbar' => [
                'left' => 'dayGridMonth,dayGridWeek,dayGridDay',
                'center' => 'title',
                'right' => 'prev,next today',
            ],
        ];
    }
}
