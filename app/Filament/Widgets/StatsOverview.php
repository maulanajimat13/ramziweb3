<?php

namespace App\Filament\Widgets;

use App\Models\datapemilih;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 2;
    protected function getStats(): array
    {
        // return [
        //     Card::make('Unique views', '192.1k'),
        //     Card::make('Bounce rate', '21%'),
        //     Card::make('Average time on page', '3:12'),
        // ];

        // return [
        //     Stat::make('Unique views', '192.1k')
        //         ->description('32k increase')
        //         ->descriptionIcon('heroicon-o-arrow-trending-up'),
        //     Stat::make('Bounce rate', '21%')
        //         ->description('7% increase')
        //         ->descriptionIcon('heroicon-o-arrow-trending-down'),
        //     Stat::make('Average time on page', '3:12')
        //         ->description('3% increase')
        //         ->descriptionIcon('heroicon-o-arrow-trending-up'),
        // ];

        return [
            
            Stat::make('GUNAWAN', datapemilih::query()->where('Koordinator', 'GUNAWAN')->count())->description('Koordinator'),
            Stat::make('M. ILYAS', datapemilih::query()->where('Koordinator', 'M. ILYAS')->count()),
            Stat::make('IWAN', datapemilih::query()->where('Koordinator', 'IWAN')->count()),
            Stat::make('SAHRUL', datapemilih::query()->where('Koordinator', 'SAHRUL')->count()),
            Stat::make('ERVAN', datapemilih::query()->where('Koordinator', 'ERVAN')->count()),
            Stat::make('ASEP RAHMAT', datapemilih::query()->where('Koordinator', 'ASEP RAHMAT')->count()),
            Stat::make('TEMI', datapemilih::query()->where('Koordinator', 'TEMI')->count()),
            
        ];
    }
}
