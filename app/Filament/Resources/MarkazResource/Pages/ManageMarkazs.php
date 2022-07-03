<?php

namespace App\Filament\Resources\MarkazResource\Pages;

use App\Filament\Resources\MarkazResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMarkazs extends ManageRecords
{
    protected static string $resource = MarkazResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
