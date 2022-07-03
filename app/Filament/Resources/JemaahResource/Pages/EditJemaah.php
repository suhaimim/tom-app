<?php

namespace App\Filament\Resources\JemaahResource\Pages;

use App\Filament\Resources\JemaahResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJemaah extends EditRecord
{
    protected static string $resource = JemaahResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
