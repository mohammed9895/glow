<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FaqBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('faq')
            ->schema([
                FileUpload::make('icon'),
                TextInput::make('title'),
                TextInput::make('description'),
                TextInput::make('email'),
                Repeater::make('questions')
                    ->schema([
                        TextInput::make('question'),
                        TextInput::make('answer'),
                    ]),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
