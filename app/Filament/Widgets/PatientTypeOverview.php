<?php

namespace App\Filament\Widgets;

use App\Models\Patient;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class PatientTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Type A', Patient::query()->where('type', 'Type A')->count()),
            Stat::make('Type B', Patient::query()->where('type', 'Type B')->count()),
            Stat::make('Type C', Patient::query()->where('type', 'Type C')->count()),
        ];
    }
}
