<?php

namespace App\Filament\Resources\TemiResource\Pages;

use App\Filament\Resources\TemiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemi extends EditRecord
{
    protected static string $resource = TemiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
