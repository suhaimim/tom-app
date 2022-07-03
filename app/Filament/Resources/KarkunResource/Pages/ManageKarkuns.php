<?php

namespace App\Filament\Resources\KarkunResource\Pages;

use App\Filament\Resources\KarkunResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKarkuns extends ManageRecords
{
    protected static string $resource = KarkunResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
