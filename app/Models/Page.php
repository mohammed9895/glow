<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends \Z3d0X\FilamentFabricator\Models\Page
{
    use HasTranslations;
    public $translatable = ['title', 'blocks'];
}
