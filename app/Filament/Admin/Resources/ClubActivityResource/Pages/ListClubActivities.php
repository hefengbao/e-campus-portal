<?php

namespace App\Filament\Admin\Resources\ClubActivityResource\Pages;

use App\Filament\Admin\Resources\ClubActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClubActivities extends ListRecords
{
    protected static string $resource = ClubActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
