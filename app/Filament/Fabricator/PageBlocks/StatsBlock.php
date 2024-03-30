<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class StatsBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('stats')
            ->schema([
                TextInput::make('title'),
                TextInput::make('button_text'),
                TextInput::make('button_url'),
                FileUpload::make('top_left_image'),
                FileUpload::make('top_right_image'),
                FileUpload::make('bottom_left_image'),
                FileUpload::make('bottom_right_image'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
