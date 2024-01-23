<?php

namespace App\Filament\Resources\AsepResource\Pages;

use App\Filament\Resources\AsepResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsep extends EditRecord
{
    protected static string $resource = AsepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
