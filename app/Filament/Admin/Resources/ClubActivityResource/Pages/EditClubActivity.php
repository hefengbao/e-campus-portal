<?php

namespace App\Filament\Admin\Resources\ClubActivityResource\Pages;

use App\Filament\Admin\Resources\ClubActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClubActivity extends EditRecord
{
    protected static string $resource = ClubActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
