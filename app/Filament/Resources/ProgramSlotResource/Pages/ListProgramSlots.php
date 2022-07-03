<?php

namespace App\Filament\Resources\ProgramSlotResource\Pages;

use App\Models\ProgramSlot;
use App\Filament\Resources\ProgramSlotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;

class ListProgramSlots extends ListRecords
{
    protected static string $resource = ProgramSlotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }


    public function getViewData(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Breakfast!',
                'start' => now()
            ],
            [
                'id' => 2,
                'title' => 'Meeting with Pamela',
                'start' => now()->addDay(),
                'url' => MeetingResource::getUrl('view', ['record' => 2]),
                'shouldOpenInNewTab' => true,
            ]
        ];
    }   
    
}
