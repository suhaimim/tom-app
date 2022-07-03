<?php

namespace App\Filament\Resources\IndukResource\Pages;

use App\Filament\Resources\IndukResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInduks extends ManageRecords
{
    protected static string $resource = IndukResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
