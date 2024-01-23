<?php

namespace App\Filament\Resources\KadudampitResource\Pages;

use App\Filament\Resources\KadudampitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKadudampit extends EditRecord
{
    protected static string $resource = KadudampitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
