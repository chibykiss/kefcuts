<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

    /**
     * A basic feature test example.
     */


    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    test('can process webhook', function () {

        $newArr = [
            "data" => [
                  "id" => 3348547814, 
                  "log" => null, 
                  "fees" => 40000, 
                  "plan" => [
                  ], 
                  "split" => [
                     ], 
                  "amount" => 2000000, 
                  "domain" => "test", 
                  "paidAt" => "2023-12-06T09:29:10.000Z", 
                  "source" => [
                           "type" => "web", 
                           "source" => "checkout", 
                           "identifier" => null, 
                           "entry_point" => "request_inline" 
                        ], 
                  "status" => "success", 
                  "channel" => "card", 
                  "message" => null, 
                  "paid_at" => "2023-12-06T09:29:10.000Z", 
                  "currency" => "NGN", 
                  "customer" => [
                              "id" => 150964980, 
                              "email" => "safeexpresscargos@gmail.com", 
                              "phone" => null, 
                              "metadata" => null, 
                              "last_name" => null, 
                              "first_name" => null, 
                              "risk_action" => "default", 
                              "customer_code" => "CUS_39ajikjonhylnwb", 
                              "international_format_phone" => null 
                           ], 
                  "metadata" => [
                                 "referrer" => "https://kefcuts.com/appointment" 
                              ], 
                  "order_id" => null, 
                  "reference" => "a8e764a5-c4d6-4e55-8376-06c5f45f4af9", 
                  "created_at" => "2023-12-06T09:29:05.000Z", 
                  "fees_split" => null, 
                  "ip_address" => "102.88.34.219", 
                  "subaccount" => [
                                 ], 
                  "authorization" => [
                                       "bin" => "408408", 
                                       "bank" => "TEST BANK", 
                                       "brand" => "visa", 
                                       "last4" => "4081", 
                                       "channel" => "card", 
                                       "exp_year" => "2030", 
                                       "reusable" => true, 
                                       "card_type" => "visa", 
                                       "exp_month" => "12", 
                                       "signature" => "SIG_TcFiLwpDJDDe2snJro8b", 
                                       "account_name" => null, 
                                       "country_code" => "NG", 
                                       "receiver_bank" => null, 
                                       "authorization_code" => "AUTH_4yxe96qnqg", 
                                       "receiver_bank_account_number" => null 
                                    ], 
                  "fees_breakdown" => null, 
                  "gateway_response" => "Successful", 
                  "requested_amount" => 2000000, 
                  "pos_transaction_data" => null 
               ], 
            "event" => "charge.success" 
         ]; 
        // Mock the external service's webhook request
        Http::fake([
            'external-service-webhook-endpoint' => Http::response(['status' => 'success'], 200),
        ]);
    
        // Emulate the webhook sending
        $response = post('/paystack_webhook', $newArr);
    
        // Assert that the webhook was processed successfully
        $response->assertStatus(200)
                 ->assertJson(['status' => 'success']);
    
        // Add any other assertions based on your webhook processing logic
    });

