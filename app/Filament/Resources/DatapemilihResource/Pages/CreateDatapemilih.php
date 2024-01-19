<?php

namespace App\Filament\Resources\DatapemilihResource\Pages;

use App\Filament\Resources\DatapemilihResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;

class CreateDatapemilih extends CreateRecord
{
    protected static string $resource = DatapemilihResource::class;
    // protected function onValidationError(ValidationException $exception): void
    // {
    //     Notification::make()
    //         ->title($exception->getMessage())
    //         ->warning()
    //         ->send();
    // }
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

}
