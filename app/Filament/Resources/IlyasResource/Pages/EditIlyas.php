<?php

namespace App\Filament\Resources\IlyasResource\Pages;

use App\Filament\Resources\IlyasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIlyas extends EditRecord
{
    protected static string $resource = IlyasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
