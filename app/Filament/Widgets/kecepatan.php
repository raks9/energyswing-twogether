<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\SpeedData;

class kecepatan extends LineChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $speedData = SpeedData::orderBy('id')->get();

        return [
            'datasets' => [
                [
                    'label' => 'Rata-Rata Kecepatan (m/s)',
                    'data' => $speedData->pluck('speed')->toArray(),
                    'backgroundColor' => [
                        'rgba(75, 192, 192, 0.8)',
                    ],
                    'borderColor' => [
                        'rgba(75, 192, 192, 0.8)',
                    ],
                ],
            ],
            'labels' => $speedData->pluck('month')->toArray(),
        ];
    }
}
