<?php

namespace App\Filament\Resources\AmalResource\Pages;

use App\Filament\Resources\AmalResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAmals extends ManageRecords
{
    protected static string $resource = AmalResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
