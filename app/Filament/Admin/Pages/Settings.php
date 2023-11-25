<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?string $title = "设置";

    protected ?string $subheading = 'Custom Page Subheading';
}
