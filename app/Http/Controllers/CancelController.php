<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;
use Jkbroot\Thawani\ThawaniPay;

class CancelController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $thawani = new ThawaniPay();
        $session_id = session()->get('session_id');
        $session = $thawani->checkoutSessions->retrieve($session_id);
        if ($session['data']['payment_status'] == 'cancelled' && $session['data']['expire_at'] > now()) {
            return view('payment.cancel', compact('session'));
        }
        return abort(403, 'Unauthorized');
    }
}
