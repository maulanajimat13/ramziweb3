<?php

namespace App\Filament\Resources\CisaatResource\Pages;

use App\Filament\Resources\CisaatResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCisaats extends ManageRecords
{
    protected static string $resource = CisaatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
