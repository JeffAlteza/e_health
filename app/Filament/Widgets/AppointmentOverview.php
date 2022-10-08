<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AppointmentOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $date = Carbon::now()->toDateString();
        $dateWeek = Carbon::now()->subDays(7);
        return [
                Card::make('Appointment this Week', Appointment::where('date', '>', $dateWeek)->count()),
                Card::make($date, Appointment::where('date','=', $date)->count()),
        ];
    }
}
