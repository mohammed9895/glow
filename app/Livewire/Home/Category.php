<?php

namespace App\Livewire\Home;

use Livewire\Component;

class Category extends Component
{
    public \App\Models\Category $category;
    public function mount($category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.home.category');
    }
}
