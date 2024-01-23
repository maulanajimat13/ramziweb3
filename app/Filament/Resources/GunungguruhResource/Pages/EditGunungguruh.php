<?php

namespace App\Filament\Resources\GunungguruhResource\Pages;

use App\Filament\Resources\GunungguruhResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGunungguruh extends EditRecord
{
    protected static string $resource = GunungguruhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
