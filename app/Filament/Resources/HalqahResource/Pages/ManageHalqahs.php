<?php

namespace App\Filament\Resources\HalqahResource\Pages;

use App\Filament\Resources\HalqahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHalqahs extends ManageRecords
{
    protected static string $resource = HalqahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
