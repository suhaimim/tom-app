<?php

namespace App\Filament\Resources\MohallahResource\Pages;

use App\Filament\Resources\MohallahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageMohallahs extends ManageRecords
{
    protected static string $resource = MohallahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
