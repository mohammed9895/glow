<?php

namespace App\Livewire\Home;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.home.categories', [
            'categories' => Category::all(),
        ]);
    }
}
