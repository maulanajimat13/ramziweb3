<?php

namespace App\Filament\Resources\SahrulResource\Pages;

use App\Filament\Resources\SahrulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListSahruls extends ListRecords
{
    protected static string $resource = SahrulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
            ExportAction::make()
            ->label('Download Data : Sahrul')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','sahrul'))
                ->withFilename('sahrul')
            ])
        ];
    }
}
