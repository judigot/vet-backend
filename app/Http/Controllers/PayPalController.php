<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Http\Request;

class PayPalController
{
    public function PaypalPayment(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('payment.success'),  
                "cancel_url" => route('payment.cancel')    
            ],
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $request->price
                    ]
                ]
            ]
        ]);
        
        if(isset($response['id']) && $response['id'] != null) {
            
            foreach($response['links'] as $link)
            {
                if($link['rel'] == 'approve') {
                    session()->put('product_name', $request->product_name);
                    session()->put('quantity', $request->quantity);
                    return redirect()->away($link['href']);
                }
            }
        } else {
            return redirect()->route('payment.cancel');
        }
    }

    public function PaymentCancel()
    {
        return 'order cancel';
    }

    public function PaymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request->token);
        
        if(isset($response['status']) && $response['status'] == 'COMPLETED')
        {
            $paymentData = [
                'payment_id' => $response['id'],
                'product_name' => session('product_name'),
                'quantity' => session('quantity'),
                'amount' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['value'],
                'currency' => $response['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'],
                'payer_name' => $response['payer']['name']['given_name'],
                'payer_email' => $response['payer']['email_address'],
                'payment_status' => $response['status'],
                'payment_method' => 'Paypal'
            ];
            
            Payment::create($paymentData);
            session()->forget(['product_name', 'quantity']);

            return "payment is successful";
            
        } else {
            return redirect()->route('payment.cancel');
        }
    }   
}
