<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FeatuersBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('featuers')
            ->schema([
                TextInput::make('main_title'),
                Repeater::make('featuers')
                    ->schema([
                        TextInput::make('title'),
                        TextInput::make('description'),
                        IconPicker::make('icon'),
                        FileUpload::make('back_image'),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
