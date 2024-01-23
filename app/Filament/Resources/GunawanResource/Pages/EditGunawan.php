<?php

namespace App\Filament\Resources\GunawanResource\Pages;

use App\Filament\Resources\GunawanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGunawan extends EditRecord
{
    protected static string $resource = GunawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
