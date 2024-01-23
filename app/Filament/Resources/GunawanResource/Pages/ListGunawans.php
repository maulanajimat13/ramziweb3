<?php

namespace App\Filament\Resources\GunawanResource\Pages;

use App\Filament\Resources\GunawanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ListGunawans extends ListRecords
{
    protected static string $resource = GunawanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()
            ->label('Download Data : Gunawan')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','gunawan'))
                ->withFilename('gunawan')
            ])
            //Actions\CreateAction::make(),
        ];
    }
}
