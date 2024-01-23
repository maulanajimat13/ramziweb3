<?php

namespace App\Filament\Resources\SahrulResource\Pages;

use App\Filament\Resources\SahrulResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSahrul extends EditRecord
{
    protected static string $resource = SahrulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
