<?php

namespace App\Filament\Widgets;

use App\Models\datapemilih;
use App\Models\Product;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class KecamatanChart extends ChartWidget
{
    protected static ?string $heading = 'Data per Kecamatan';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = $this->getDataPerKecamatan();

        return [
            'datasets' => [
                [
                    'label' => 'Kecamatan',
                    'data' => $data['DataPerKecamatan']
                ]
            ],
            'labels' => $data['kecamatan']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getDataPerKecamatan(): array
    {
        $now = Carbon::now();

        $DataPerKecamatan = [
            datapemilih::query()->where('Kecamatan', 'KADUDAMPIT')->count(),
            datapemilih::query()->where('Kecamatan', 'GUNUNGGURUH')->count(),
            datapemilih::query()->where('Kecamatan', 'GEGERBITUNG')->count(),
            datapemilih::query()->where('Kecamatan', 'KEBONPEDES')->count(),
            datapemilih::query()->where('Kecamatan', 'SUKALARANG')->count(),
            datapemilih::query()->where('Kecamatan', 'SUKABUMI')->count(),
            datapemilih::query()->where('Kecamatan', 'CISAAT')->count(),
            datapemilih::query()->where('Kecamatan', 'CIRENGHAS')->count(),
            datapemilih::query()->where('Kecamatan', 'SUKARAJA')->count(),

    ];
        $kecamatan = [
            'KADUDAMPIT',
            'GUNUNGGURUH',
            'GEGERBITUNG',
            'KEBONPEDES',
            'SUKALARANG',
            'SUKABUMI',
            'CISAAT',
            'CIRENGHAS',
            'SUKARAJA',
        ];

        return [
            'DataPerKecamatan' => $DataPerKecamatan,
            'kecamatan' => $kecamatan,
        ];
    }
}