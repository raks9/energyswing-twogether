<?php

namespace App\Filament\Widgets;

use App\Models\PowerData;
use Filament\Widgets\LineChartWidget;

class PowerChartWidget extends LineChartWidget
{
    protected static ?string $heading = 'Chart Kekuatan';

    protected function getData(): array
    {
        $data = PowerData::all();

        return [
            'datasets' => [
                [
                    'label' => 'Kekuatan (Watt)',
                    'data' => $data->pluck('power')->toArray(),
                    'backgroundColor' => [
                        'rgba(255, 165, 0, 0.8)',
                    ],
                    'borderColor' => [
                        'rgba(255, 165, 0, 0.8)',
                    ],
                ],
            ],
            'labels' => $data->pluck('month')->toArray(),
        ];
    }
}
