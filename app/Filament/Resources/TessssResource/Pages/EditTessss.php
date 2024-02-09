<?php

namespace App\Filament\Resources\TessssResource\Pages;

use App\Filament\Resources\TessssResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTessss extends EditRecord
{
    protected static string $resource = TessssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
