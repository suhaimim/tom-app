<?php

namespace App\Filament\Resources\TafakutResource\Pages;

use App\Filament\Resources\TafakutResource;
use Filament\Resources\Pages\Page;
use App\Models\Tafakut;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Actions\Action;

class PrintTafakuts extends Page
{
    protected static string $resource = TafakutResource::class;

    protected static string $view = 'filament.resources.tafakut-resource.pages.print-tafakuts';

    public Tafakut $record;

    protected function getActions(): array
    {
        return [
            Action::make('export to pdf')
                ->form(
                    function ($livewire) {
                        return [
                            TextInput::make('file_name')
                                ->default(time()."_".$livewire->record->karkun_id)
                                ->required()
                        ];
                    }
                )
                ->action(function (array $data, $livewire) {
                    $fileName = $data["file_name"] ?? time()."_".$livewire->record->karkun_id;
                    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('filament/resources/tafakut-resource/pages/partials/print', ['record' => $this->record, 'fileName' => $fileName])->setPaper('A4', 'portrait');
                    return response()->streamDownload(fn () => print($pdf->output()), "{$fileName}.pdf");
                })
                ->modalWidth('sm')
        ];
    }

}
