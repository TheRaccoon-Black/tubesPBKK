<?php

namespace App\Filament\Resources\EntriResource\Pages;

use App\Filament\Resources\EntriResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntris extends ListRecords
{
    protected static string $resource = EntriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
