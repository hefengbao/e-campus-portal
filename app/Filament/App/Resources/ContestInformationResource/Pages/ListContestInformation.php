<?php

namespace App\Filament\App\Resources\ContestInformationResource\Pages;

use App\Filament\App\Resources\ContestInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContestInformation extends ListRecords
{
    protected static string $resource = ContestInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
