<?php

namespace App\Filament\Admin\Resources\BaoResource\Pages;

use App\Filament\Admin\Resources\BaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaos extends ListRecords
{
    protected static string $resource = BaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
