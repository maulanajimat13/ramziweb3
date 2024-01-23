<?php

namespace App\Filament\Resources\ErvanResource\Pages;

use App\Filament\Resources\ErvanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditErvan extends EditRecord
{
    protected static string $resource = ErvanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
