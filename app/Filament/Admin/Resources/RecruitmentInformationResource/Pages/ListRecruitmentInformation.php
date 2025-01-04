<?php

namespace App\Filament\Admin\Resources\RecruitmentInformationResource\Pages;

use App\Filament\Admin\Resources\RecruitmentInformationResource;
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
