<?php

namespace App\Filament\Widgets;

use App\Models\Appointment;
use Closure;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestAppointment extends BaseWidget
{
    protected int | string |array $columnSpan = 'full'; 

    protected function getTableQuery(): Builder
    {
        return Appointment::where('date', '>', now()); 
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('date')->label('Date'),
            TextColumn::make('name')->sortable()->searchable(),
            TextColumn::make('gender'),
            TextColumn::make('category')->sortable()->searchable(),
            TextColumn::make('specification'),
            BadgeColumn::make('status')
                    ->colors([
                        'danger' => 'cancelled',
                        'warning' => 'pending',
                        'success' => 'success',
                    ])->sortable()->searchable()
        ];
    }
}
