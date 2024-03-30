<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePage extends \Z3d0X\FilamentFabricator\Resources\PageResource\Pages\CreatePage
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = PageResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }

}
