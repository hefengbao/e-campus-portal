<?php

namespace App\Filament\App\Widgets;

use App\Models\News;
use Filament\Widgets\Widget;

class NewsWidget extends Widget
{
    protected static string $view = 'filament.app.widgets.news-widget';

    protected function getViewData(): array
    {
        return [
            'news' => News::orderBy('published_at', 'desc')->limit(10)->get()->all()
        ];
    }
}
