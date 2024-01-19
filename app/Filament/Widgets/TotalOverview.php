<?php

namespace App\Filament\Widgets;

use App\Models\datapemilih;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalOverview extends BaseWidget
{
    // protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total', datapemilih::query()->count())->description('orang')
            ->color('success')
            ->extraAttributes([
                'class' => 'cursor-pointer',
                'wire:click' => "\$dispatch('setStatusFilter', { filter: 'processed' })",
            ])
            
        ];
    }
}
