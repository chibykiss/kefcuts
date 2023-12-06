<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Spatie\WebhookClient\WebhookProfile\WebhookProfile;

class MyPaystackWebhookProfile extends Controller implements WebhookProfile
{
    public function shouldProcess(Request $request): bool
    {
        Log::channel('kef')->debug('incoming_data:',collect($request)->toArray());
        return true;
    }
}
