<?php

namespace App\Filament\Resources\IlyasResource\Pages;

use App\Filament\Resources\IlyasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIlyas extends ListRecords
{
    protected static string $resource = IlyasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //\CreateAction::make(),
            ExportAction::make()
            ->label('Download Data : M. Ilyas')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','m. ilyas'))
                ->withFilename('m. ilyas')
            ])
        ];
    }
}
