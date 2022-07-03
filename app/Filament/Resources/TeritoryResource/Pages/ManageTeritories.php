<?php

namespace App\Filament\Resources\TeritoryResource\Pages;

use App\Filament\Resources\TeritoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTeritories extends ManageRecords
{
    protected static string $resource = TeritoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
