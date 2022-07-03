<?php

namespace App\Filament\Resources\TafakutResource\Pages;

use App\Filament\Resources\TafakutResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTafakut extends EditRecord
{
    protected static string $resource = TafakutResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
