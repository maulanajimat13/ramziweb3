<?php

namespace App\Filament\Resources\DatapemilihResource\Pages;

use App\Filament\Resources\DatapemilihResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatapemilihs extends ListRecords
{
    protected static string $resource = DatapemilihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
