<?php

namespace App\Filament\Admin\Resources\PatientResource\Pages;

use App\Filament\Admin\Resources\PatientResource;
use Filament\Actions;
use Filament\Notifications\Events\DatabaseNotificationsSent;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function save(bool $shouldRedirect = true): void
    {
        parent::save($shouldRedirect);

        Notification::make()
            ->title('怎么样，不错吧')
            ->sendToDatabase(auth()->user());

        event(new DatabaseNotificationsSent(auth()->user()));
    }
}
