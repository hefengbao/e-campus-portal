<?php

namespace App\Filament\App\Resources\EntertainmentActivityResource\Pages;

use App\Filament\App\Resources\EntertainmentActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEntertainmentActivity extends EditRecord
{
    protected static string $resource = EntertainmentActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
