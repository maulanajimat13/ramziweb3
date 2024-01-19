<?php

namespace App\Filament\Resources\DatapemilihResource\Pages;

use App\Filament\Resources\DatapemilihResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;


class EditDatapemilih extends EditRecord
{
    protected static string $resource = DatapemilihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function onValidationError(ValidationException $exception): void
    {
        Notification::make()
            ->title($exception->getMessage())
            ->danger()
            ->send();
    }
}
