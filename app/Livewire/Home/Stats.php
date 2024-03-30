<?php

namespace App\Livewire\Home;

use App\Models\Donation;
use Livewire\Component;

class Stats extends Component
{
    public function render()
    {
        return view('livewire.home.stats', [
            'total_donations' => Donation::sum('amount') / 1000,
        ]);
    }
}
