<?php

namespace App\Filament\Admin\Resources\EntertainmentActivityResource\Pages;

use App\Filament\Admin\Resources\EntertainmentActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntertainmentActivities extends ListRecords
{
    protected static string $resource = EntertainmentActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
