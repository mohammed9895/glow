<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Project;
use Illuminate\Http\Request;
use Jkbroot\Thawani\ThawaniPay;

class SuccessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $thawani = new ThawaniPay();
        $session_id = session()->get('session_id');
        $session = $thawani->checkoutSessions->retrieve($session_id);

        if ($session['data']['payment_status'] == 'paid' && $session['data']['expire_at'] > now()) {
            $project = Project::find($session['data']['metadata']['project_id']);
            Donation::firstOrCreate(['invoice_id' => $session['data']['invoice']], [
                'amount' => $session['data']['total_amount'],
                'project_id' => $session['data']['metadata']['project_id'],
            ]);
            return view('payment.success', compact('session', 'project'));
        }
        return abort(403, 'Unauthorized');
    }
}
