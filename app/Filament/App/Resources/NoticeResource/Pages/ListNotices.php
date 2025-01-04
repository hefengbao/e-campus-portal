<?php

namespace App\Filament\App\Resources\NoticeResource\Pages;

use App\Filament\App\Resources\NoticeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNotices extends ListRecords
{
    protected static string $resource = NoticeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
