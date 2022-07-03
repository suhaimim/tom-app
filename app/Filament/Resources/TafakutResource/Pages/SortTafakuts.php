<?php

namespace App\Filament\Resources\TafakutResource\Pages;

use App\Filament\Resources\TafakutResource;
use Filament\Resources\Pages\Page;
use App\Models\Tafakut;

class SortTafakuts extends Page
{
    protected static string $resource = TafakutResource::class;

    protected static string $view = 'filament.resources.tafakut-resource.pages.sort-tafakuts';

    public Tafakut $record;



}
