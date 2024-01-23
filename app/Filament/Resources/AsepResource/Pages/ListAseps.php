<?php

namespace App\Filament\Resources\AsepResource\Pages;

use App\Filament\Resources\AsepResource;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\DBAL\TimestampType;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListAseps extends ListRecords
{
    protected static string $resource = AsepResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()
            ->label('Download Data : Asep Rahmat')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','asep rahmat'))
                ->withFilename('Asep Rahmat- '. Carbon::now()->toDateTimeString()),
            ])
            
            //Actions\CreateAction::make(),
        ];
    }
}
