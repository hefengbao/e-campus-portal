<?php

namespace App\Filament\Admin\Resources\RecruitmentInformationResource\Pages;

use App\Filament\Admin\Resources\RecruitmentInformationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecruitmentInformation extends EditRecord
{
    protected static string $resource = RecruitmentInformationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
