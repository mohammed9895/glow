<?php

namespace App\Livewire\Home;

use Jkbroot\Thawani\ThawaniPay;
use Livewire\Component;

class Project extends Component
{
    public \App\Models\Project $project;

    public $amount = 5;

    public function mount(\App\Models\Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.home.project');
    }

    public function donate()
    {
        $this->validate([
            'amount' => 'required|numeric|min:1'
        ]);

        $thawani = new ThawaniPay();
        $user = auth()->user();

        $customer_id = null;

        if ( $user->thawani_customer_id == null)
        {
            $customer_data = [
                "client_customer_id" => $user->email,
            ];

            $customer = $thawani->customers->create($customer_data);


            $user->thawani_customer_id = $customer['data']['id'];

            $customer_id = $customer['data']['id'];

            $user->save();
        }
        else {
            $customer_id = $user->thawani_customer_id;
        }


        $data = [
            "client_reference_id" => "123412",
            "mode" => "payment",
            "products" => [
                [
                    "name" => 'Donating for ' . $this->project->title,
                    "quantity" => 1,
                    "unit_amount" => ($this->amount * 1000),
                ],
            ],
            "customer_id" => $customer_id,
            "payment_method_id" => $user->primary_card_id,
            "save_card_on_success" => true,
            "success_url" => "https://glow.test/success",
            "cancel_url" => "https://glow.test/cancel",
            "metadata" => [
                "project_id" => $this->project->id,
            ],
        ];

        $checkoutUrl = $thawani->checkoutSessions->createCheckoutUrl($data);

        session()->put('session_id', $checkoutUrl['session_id']);

        $this->redirect($checkoutUrl['redirect_url']);

    }
}
