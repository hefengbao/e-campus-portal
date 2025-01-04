<?php

namespace App\Filament\App\Resources\RecruitmentInformationResource\Pages;

use App\Filament\App\Resources\RecruitmentInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecruitmentInformation extends ListRecords
{
    protected static string $resource = RecruitmentInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
