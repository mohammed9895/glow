<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ProjectsBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('projects')
            ->schema([
                TextInput::make('title'),
                TextInput::make('number_of_projects')->numeric(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
