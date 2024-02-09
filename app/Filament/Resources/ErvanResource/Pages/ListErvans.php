<?php

namespace App\Filament\Resources\ErvanResource\Pages;

use App\Filament\Resources\ErvanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListErvans extends ListRecords
{
    protected static string $resource = ErvanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()
            ->label('Download Data : Ervan')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()//->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','ervan'))
                ->withFilename('Ervan')
            ])
            //Actions\CreateAction::make(),
        ];
    }
}
