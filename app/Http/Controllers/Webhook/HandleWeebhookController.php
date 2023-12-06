<?php

namespace App\Http\Controllers\Webhook;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HandleWeebhookController extends Controller
{
    public function __invoke(Request $request)
    {
        Log::channel('kef')->debug('first:',collect($request)->toArray());
        $webhookConfig = new \Spatie\WebhookClient\WebhookConfig([
            'name' => 'default',
            'signing_secret' => env('PAYSTACK_SECRET'),
            'signature_header_name' => 'x-paystack-signature',
            // 'signature_validator' => \Spatie\WebhookClient\SignatureValidator\DefaultSignatureValidator::class,
            'signature_validator' => \App\Http\Controllers\Webhook\MyPaystackSignatureValidatorController::class,
            //'webhook_profile' => \Spatie\WebhookClient\WebhookProfile\ProcessEverythingWebhookProfile::class,
            'webhook_profile' => \App\Http\Controllers\Webhook\MyPaystackWebhookProfile::class,
            'webhook_response' => \Spatie\WebhookClient\WebhookResponse\DefaultRespondsTo::class,
            'webhook_model' => \Spatie\WebhookClient\Models\WebhookCall::class,
            'process_webhook_job' => \App\Jobs\ProcessPaystackWebhookJob::class,
        ]);
        
        (new \Spatie\WebhookClient\WebhookProcessor($request, $webhookConfig))->process();
    }
}
