<?php

namespace App\Filament\Resources\DatapemilihResource\Pages;

use App\Filament\Resources\DatapemilihResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListDatapemilihs extends ListRecords
{
    protected static string $resource = DatapemilihResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            // ExportAction::make()->exports([
            //     ExcelExport::make('calon_pemilihs')->fromTable()
            // ]),
            ExportAction::make()->exports([
            ExcelExport::make('datapemilihs')->fromTable()
                ->askForFilename()
                ->askForWriterType()
        ])
        ];
    }
}
