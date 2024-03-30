<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class MessagesBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('messages')
            ->schema([
                TextInput::make('first_line'),
                TextInput::make('second_line'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
