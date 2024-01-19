<?php

namespace App\Filament\Widgets;

use App\Models\datapemilih;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogPostsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static string $color = 'info';
    
    protected function getData(): array
    {
        $data = Trend::model(datapemilih::class)
        ->between(
            start: now()->startOfYear(),
            end: now()->endOfYear(),
        )
        ->perMonth()
        ->count();
 
    return [
        'datasets' => [
            [
                'label' => 'Data Pemilih',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];    
}

    protected function getType(): string
    {
        return 'pie';
    }
}
