<?php

namespace App\Filament\Resources\IwanResource\Pages;

use App\Filament\Resources\IwanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIwan extends EditRecord
{
    protected static string $resource = IwanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
