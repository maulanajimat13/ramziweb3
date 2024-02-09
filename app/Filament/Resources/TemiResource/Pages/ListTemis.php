<?php

namespace App\Filament\Resources\TemiResource\Pages;

use App\Filament\Resources\TemiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListTemis extends ListRecords
{
    protected static string $resource = TemiResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\CreateAction::make(),
            ExportAction::make()
            ->label('Download Data : Temi')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()//->//only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','temi'))
                ->withFilename('TEMI')
            ])
        ];
    }
}
