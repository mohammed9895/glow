<?php

use Illuminate\Support\Facades\Route;
use Jkbroot\Thawani\ThawaniPay;

Route::get('/auth/register', \App\Livewire\Auth\Register::class)->name('auth.register');
Route::get('/auth/login', \App\Livewire\Auth\Login::class)->name('auth.login');
Route::get('/profile', \App\Livewire\Auth\Profile::class)->name('profile');
Route::get('/payment_methods', \App\Livewire\Auth\PaymentMethods::class)->name('payment_methods');

Route::get('/auth/logout', function () {
    auth()->logout();
    return redirect()->to('/');
})->name('auth.logout');

Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('language.switch');

Route::get('/projects/{project}', \App\Livewire\Home\Project::class)->name('projects.project');

Route::get('/categories', \App\Livewire\Home\Categories::class)->name('categories');

Route::get('/categories/{category}', \App\Livewire\Home\Category::class)->name('categories.category');

Route::get('success', \App\Http\Controllers\SuccessController::class);

Route::get('cancel', \App\Http\Controllers\CancelController::class);



Route::get('re-donate/{session}', function ($session_id) {

    $thawani = new ThawaniPay();

    $session = $thawani->checkoutSessions->retrieve($session_id);

    $amount = $session['data']['total_amount'];

    $data = [
        "client_reference_id" => "123412",
        "mode" => "payment",
        "products" => [
            [
                "name" => $session['data']['products'][0]['name'],
                "quantity" => 1,
                "unit_amount" => $amount,
            ],
        ],
        "success_url" => "https://glow.test/success",
        "cancel_url" => "https://glow.test/cancel",
        "metadata" => [
            "project_id" => $session['data']['metadata']['project_id'],
        ],
    ];

    $checkoutUrl = $thawani->checkoutSessions->createCheckoutUrl($data);

    session()->put('session_id', $checkoutUrl['session_id']);

    return redirect($checkoutUrl['redirect_url']);
})->name('re-donate');
