<?php

namespace App\Filament\Resources\KadudampitResource\Pages;

use App\Filament\Resources\KadudampitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\Column;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListKadudampits extends ListRecords
{
    protected static string $resource = KadudampitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make()->label('asdasdsad'),
            ExportAction::make()
            ->label('Gunawan')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','gunawan'))
                ->withFilename('gunawan')
                
                //     ->askForFilename()
                //     ->askForWriterType()
            ])
            
        ];
        
    }
   
}
