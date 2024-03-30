<?php

namespace App\Livewire\Auth;

use Jkbroot\Thawani\ThawaniPay;
use Livewire\Component;

class PaymentMethods extends Component
{
    public $paymentMethods;
    public function mount()
    {
        $thawani = new ThawaniPay();

        $this->paymentMethods = $thawani->paymentMethods->list(auth()->user()->thawani_customer_id);
    }

    public function setDefault($id)
    {
        $user = auth()->user();

        $user->primary_card_id = $id;
        $user->save();

        session()->flash('success', 'Default card updated successfully.');
    }
    public function render()
    {
        return view('livewire.auth.payment-methods');
    }
}
