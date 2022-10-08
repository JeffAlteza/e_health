<?php

namespace App\Filament\Resources\DoctorScheduleResource\Pages;

use App\Filament\Resources\DoctorScheduleResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDoctorSchedule extends CreateRecord
{
    protected static string $resource = DoctorScheduleResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
