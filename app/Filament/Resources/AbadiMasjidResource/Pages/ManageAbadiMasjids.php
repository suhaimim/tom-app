<?php

namespace App\Filament\Resources\AbadiMasjidResource\Pages;

use App\Filament\Resources\AbadiMasjidResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageAbadiMasjids extends ManageRecords
{
    protected static string $resource = AbadiMasjidResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
