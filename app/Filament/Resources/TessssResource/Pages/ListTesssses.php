<?php

namespace App\Filament\Resources\TessssResource\Pages;

use App\Filament\Resources\TessssResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTesssses extends ListRecords
{
    protected static string $resource = TessssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
