<?php
namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use App\Filament\Widgets\PowerChartWidget;

class FilamentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerWidgets([
                PowerChartWidget::class, // Tambahkan widget PowerChartWidget
            ]);
        });
    }
}
