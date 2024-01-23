<?php

namespace App\Filament\Resources\IwanResource\Pages;

use App\Filament\Resources\IwanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListIwans extends ListRecords
{
    protected static string $resource = IwanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
            ExportAction::make()
            ->label('Download Data : Iwan')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','iwan'))
                ->withFilename('iwan')
            ])
        ];
    }
}
