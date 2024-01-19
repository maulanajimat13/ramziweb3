<?php
 
namespace App\Filament\Widgets;

use App\Models\datapemilih;
use Closure;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
 
class LatestOrders extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return datapemilih::query()->where('desa','like','cisaat');
    }
 
    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id'),
            Tables\Columns\TextColumn::make('nama')
                ->label('Customer'),
        ];
    }
}