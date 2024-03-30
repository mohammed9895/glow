<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero')
            ->schema([
                TextInput::make('main_title')
                    ->required(),
                TextInput::make('sub_title')
                    ->required(),
                TextInput::make('button_1_text')
                    ->required(),
                TextInput::make('button_1_url')
                    ->required(),
                TextInput::make('button_2_text')
                    ->required(),
                IconPicker::make('button_2_icon')
                    ->required(),
                TextInput::make('button_2_url')
                    ->required(),

                Tabs::make('Grid')->tabs([
                    Tab::make('Grid 1')->schema([
                        TextInput::make('grid_1_percentage')->required(),
                        TextInput::make('grid_1_text')->required(),
                        TextInput::make('grid_1_button_text')->required(),
                        TextInput::make('grid_1_button_url')->required(),
                    ]),
                    Tab::make('Grid 2')->schema([
                        IconPicker::make('grid_2_icon')->required(),
                        TextInput::make('grid_2_text')->required(),
                    ]),
                    Tab::make('Grid 3')->schema([
                        TextInput::make('grid_3_title')->required(),
                        FileUpload::make('grid_3_image')->required(),
                    ]),
                    Tab::make('Grid 4')->schema([
                        TextInput::make('grid_4_title')->required(),
                        TextInput::make('grid_4_button_text')->required(),
                        TextInput::make('grid_4_button_url')->required(),
                    ]),
                    Tab::make('Grid 5')->schema([
                        TextInput::make('grid_5_title')->required(),
                        FileUpload::make('grid_5_image')->required(),
                    ]),
                    Tab::make('Grid 6')->schema([
                        FileUpload::make('grid_6_image')->required(),
                        TextInput::make('grid_6_button_text')->required(),
                        TextInput::make('grid_6_button_url')->required(),
                    ]),
                    Tab::make('Grid 7')->schema([
                        IconPicker::make('grid_7_icon')->required(),
                        TextInput::make('grid_7_text')->required(),
                    ]),
                ]),


            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
