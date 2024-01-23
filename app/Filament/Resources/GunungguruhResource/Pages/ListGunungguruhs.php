<?php

namespace App\Filament\Resources\GunungguruhResource\Pages;

use App\Filament\Resources\GunungguruhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGunungguruhs extends ListRecords
{
    protected static string $resource = GunungguruhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
