<?php

namespace App\Filament\Admin\Resources\ContestInformationResource\Pages;

use App\Filament\Admin\Resources\ContestInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContestInformation extends EditRecord
{
    protected static string $resource = ContestInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
